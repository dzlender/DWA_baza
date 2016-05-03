var express = require('express');
var app = express();
var bodyParser = require('body-parser');

var urlencodedParser = bodyParser.urlencoded({ extended: false })

app.set('view engine', 'ejs');

app.use(express.static('public'));

app.get('/login.html', function (req, res) {
   res.sendFile( __dirname + "/" + "login.html" );
})

app.post('/ulogiran', urlencodedParser, function (req, res) {
		
	var username = req.body.username;
	var password = req.body.password;
    res.render('zivotopis',{username: username, password: password}); 
})

var server = app.listen(8081, function () {

  var host = server.address().address
  var port = server.address().port

  console.log("Example app listening at http://%s:%s", host, port)

});