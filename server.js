


//to check wheather is running..alag alag tab me same localhost:5555 daalo then console me jaake(inspect krke)
//let x=io()
//x.id


// to alag alag tab me alag alag ID show hogi

// the express library
const express = require('express')
// the http library (comes with nodejs by default)
const http = require('http')
// the socket.io library
const socketio = require('socket.io')

//ye hum nahi bhi likhskte ,bas app.listen me 5555 likhdena PORT ki jagah
const PORT = process.env.PORT || 5555    //ye humne heroku ke liye kia h ki agar jab hum uspr apna ye code github ke baad uspr host krenge to use dikkat nahi heroku ko 5555 localhost dhundhne me

// the express app
const app = express()
// the http server created with logic of the app
const server = http.createServer(app)
// the socket.io listener created on the server 
const io = socketio(server)

app.use('/', express.static(__dirname + '/public'))

io.on('connection', (socket) => {
    console.log('connection created', socket.id)

    socket.on('beep', (data) => {
        io.emit('beep', {
            state: data.state,
            id: socket.id
        })
    })

    socket.on('msg_send', (data) => {
        // io.emit('msg_rcvd', data)    //aur isse dono jagah dikhega
        // io.to('<socket id>').emit()
        socket.broadcast.emit('msg_rcvd', data)     //broadcast se jo hum msg send krenge wo hmare screen pr nahi dikhega...wo jisko humne bheja h uspr deikhega
    })
})


server.listen(PORT, () => {
    console.log(`started on http://localhost:${PORT}`)
})

//jab hum beep pr baar baar dabate rahenge to cmd me uski id aayegi and then jab hum server band krenge and then firse start krenge server by node server.js then alag ID aayegi cmd ke terminal me

