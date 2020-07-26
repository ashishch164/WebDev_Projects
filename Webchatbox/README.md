                                                                    WEB-CHAT BOX

## Description
•	Developed a Web-chat Box Application using Sockets.io, in which one person can send message to number of users (which are connected) and also receive messages from them.

This is how my work look like:
https://github.com/ashishch164/WebDev_Projects/blob/master/Webchatbox/images/intro.jpg

It has a box where user can write their message and "BEEP", "SEND"  buttons and there functionality is defined below.

•	**Tech stack used: HTML, CSS, JavaScript, socket.io, express.**

Why i choose socket.io for this ??

Writing a chat application with popular web applications stacks like LAMP (PHP) has normally been very hard. It involves polling the server for changes, keeping track of timestamps, and it’s a lot slower than it should be.

Sockets have traditionally been the solution around which most real-time chat systems are architected, providing a bi-directional communication channel between a client and a server.

Why i choose express.js for this ??

Express is a minimal and flexible Node.js web application framework that provides a robust set of features to develop web and mobile applications. Following are some of the core features of Express framework −

1.Allows to set up middlewares to respond to HTTP Requests.

2.Defines a routing table which is used to perform different actions based on HTTP Method and URL.

## Feature
It has a very simple layout .User can send messages easily and receives from them also.




**Note : This application only works on my system,So i have to write localhost:5555 on browser's URL (where i hosted my server of this webchat application). So to start my server ,I have to write command node server.js   in command prompt ,and then server becomes active and open two windows (just to look like two person is chatting from two different windows) and now we are good to go.**

## Opearation

1. Sending message from first person to second person

User have to write their message in message box and then press SEND button,his message sent to 2nd person.

From 1st person perspective : https://github.com/ashishch164/WebDev_Projects/blob/master/Webchatbox/images/first%20message.jpg
From 2nd person perspective : https://github.com/ashishch164/WebDev_Projects/blob/master/Webchatbox/images/first_msg_received.jpg

2. Sending message from second person to first person

User have to write their message in message box and then press SEND  button,his message sent to 1st person.

From 2nd person perspective : https://github.com/ashishch164/WebDev_Projects/blob/master/Webchatbox/images/second_msg.jpg
From 1st person perspective : https://github.com/ashishch164/WebDev_Projects/blob/master/Webchatbox/images/second-msg_received.jpg

So in this way,a user can send msgs to many users(which are connected) and can also receives messages from them.

3. BEEP button

It shows only the address of latest path created between client and server.

https://github.com/ashishch164/WebDev_Projects/blob/master/Webchatbox/images/BEEP.jpg

## Visuals

I have uploaded my webchat application on netlify platform,from where you can see how it actually look like but you can't try out its functionality,here is the link:

https://webchatbox.netlify.app/

Thank you :)
