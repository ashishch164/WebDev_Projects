

// window.onload = function () {
//     let btnBeep = this.document.getElementById('beep')

//     btnBeep.onclick = function () {
//         socket.emit('beep')
//     }

// }


const socket = io()

$(() => {
  $('#beep').mousedown(() => {
    socket.emit('beep', { state: 'on' })
  })
  $('#beep').mouseup(() => {
    socket.emit('beep', { state: 'off' })
  })

  $('#send').click(() => {
    let msg = $('#msg').val()       //ye humne uske liye banaya h ki jab SEND pe client click krega tab msg me uski value aajaye aur agar koi msg exist krta h to
    if (msg) {
      socket.emit('msg_send', { msg: msg })     //to emit krdo msg ko 
      $('#msg').val('')     //aur msg send krne ke baad uski value clear krdo ,taaki dusra msg send krsake
      //now this msg has to recieved by server to uske liye hum function server.js me banayenge
    }
  })

  socket.on('msg_rcvd', data => {
    $('#chatbox').append($('<div>').text(data.msg))     //mtlb chatbox vaale div me(in html code) ek naya div banao aur usme textmsg ko append krdo,taaki user ko ek div me apna msg dikhjaaye
  })

  socket.on('beep', data => {
    let status = $('#' + data.id)
    if (!status[0]) {
      $('#statusbox').append(
        $(`<div class="status" id="${data.id}">`).text(data.id)
      )
      status = $('#' + data.id)
    }

    status.css(
      'background-color',
      data.state == 'on' ? 'green' : 'red'
    )
  })
})