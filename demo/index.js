const path = require('path');
const express = require('express');
const ejs = require('ejs');
const bodyparser = require('body-parser');
const app = express();

app.set('views', path.join(__dirname, 'views'));
//set view engine
app.set('view engine', 'ejs');
app.use(bodyparser.json());
app.use(bodyparser.urlencoded({ extended : false }));

//route homepage
app.get('/', (req, res) => {
    res.render('index');
});

//server
app.listen(9050, () => {
    console.log('server running');
});
