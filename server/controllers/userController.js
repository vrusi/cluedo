var User = require('../models').User;

exports.create = async function (req, res) {
    try {
        const user = await User.create({
            username: req.body.username,
            password: req.body.password,
        })

        res.status(201).send(user);
    }
    catch (error) {
        console.log(error);
        res.status(400).send(error);
    }
}

// exports.read

// exports.update

// exports.delete

// exports.index