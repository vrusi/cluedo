var express = require("express");
var router = express.Router();

var userController = require('../controllers/userController');

router.post('users', userController.create);

module.exports = router;