var express = require('express')
var app = express()
var bodyParser = require('body-parser')
var cors = require('cors')
var mysql      = require('mysql');
var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'root',
  password : '',
  database : 'blog'
});

app.use(cors())

// parse application/x-www-form-urlencoded 
app.use(bodyParser.urlencoded({ extended: false }))
 
// parse application/json 
app.use(bodyParser.json())

app.get('/', function (req, res) {
	connection.query('SELECT * FROM HOTELS', function (error, results, fields) {
	  if (error) throw error;
	  // connected!
	  console.log(results)
	  res.send(JSON.stringify(results))
	});
})

app.post('/createuser', function (req, res) {
	console.log('income request')
	console.log(req.body)
	connection.query('INSERT INTO USERS (name,email,password) VALUES ("'+req.body.name+'","'+req.body.email+'","'+req.body.password+'")', function (error, results, fields) {
	  if (error) throw error;
	  // connected!
	  console.log('Insert Complete')
	  //res.send(JSON.stringify(results))
	  res.redirect('http://localhost:8080/user.html')
	}); 
})

app.post('/bookingroom', function(req, res) {
	console.log('income request')
	console.log(req.body)
	connection.query('INSERT INTO CUSTOMERS (name,surname,address,email,tel) VALUES ("'+req.body.name+'","'+req.body.surname+'","'+req.body.address+'","'+req.body.email+'","'+req.body.tel+'")',
		function (error, results, feilds){
			if (error) throw error;
			console.log('Insert Complete')
			res.redirect('http://localhost:8080/booking.blade.php')
		});
})


app.listen(3000, function () {
  console.log('Example app listening on port 3000!')
})


