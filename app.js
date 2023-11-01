var express = require('express');
const req = require('express/lib/request');
var mysql = require('mysql');
var cors = require('cors');

//constructor de express 
var app = express();
app.use(express.json());
app.use(cors());

//conexion base de datos
var conexion = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'articulosdb',
    port: 3305,
});

//Comprovacion de la conexion 
conexion.connect(function(error){
    if(error){
        throw error;
    }else{
        console.log("Conexion exitosa a la base de datos")
    }
});

//Muestra la pagina principal del servidor
app.get('/', function(req,res){
    res.send('Ruta PRINCIPAL');
});

//METODOS HTTP:
//Este metodo MUESTRA todos los articulos
app.get('/api/articulos', (req, res) => {
    conexion.query('SELECT * FROM articulos', (error, filas) => {
        if (error) {
            throw error;
        } else {
            res.send(filas);
        }
    });
});

//Este metodo MUESTRA solo un articulo
app.get('/api/articulos/:id', (req, res) => {
    conexion.query('SELECT * FROM articulos WHERE id = ?', [req.params.id], (error, fila) => {
        if (error) {
            throw error;
        } else {
            res.send(fila); //<-- muestra todas las filas de la tabla
            // res.send(fila[0].descripcion); <-- muestra una fila de la tabla
        }
    });
});

//Este metodo CREA un articulo
app.post('/api/articulos', (req, res) => {

    let data = { descripcion: req.body.descripcion, precio: req.body.precio, stock: req.body.stock };
    let sql = "INSERT INTO articulos SET ?";
    conexion.query(sql, data, function (error, results) {
        if (error) {
            throw error;
        } else {
            res.send(results);
        }
    });
});

// Este metodo EDITA un articulo
app.put('/api/articulos/:id', (req, res) => {
    let id = req.params.id;
    let descripcion = req.body.descripcion;
    let precio = req.body.precio;
    let stock = req.body.stock;
    let sql = "UPDATE articulos SET descripcion = ?, precio = ?, stock = ? WHERE id = ?";

    conexion.query(sql, [descripcion, precio, stock, id], function (error, results) {
        if (error) {
            throw error;
        } else {
            res.send(results);
        }
    });
});

// Este metodo ELIMINA un articulo
app.delete ('/api/articulos/:id', (req, res) => {
    conexion.query('DELETE FROM articulos WHERE id = ?', [req.params.id], function(error, results){
        if (error) {
            throw error;
        } else {
            res.send(results);
        }
    });
});

//Muestra el estado del servidor
const puerto = process.env.PUERTO || 3000;
app.listen(puerto ,function(){
    console.log("Servidor conectado :) , en el puerto: "+puerto);
});