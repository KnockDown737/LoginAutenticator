<?php header("Content-type: text/css"); ?>

fieldset {
    border: 0;
}

body, input, button {
    font-family: sans-serif;
    font-size: 1em;
}

.grupo:before, .grupo:after {
    content: " ";
    display: table;
}

.grupo:after {
    clear: both;
}

.campo {
    margin-bottom: 1em;
}

.campo label {
    margin-bottom: 0.2em;
    color: black;
    display: block;
}

.botao {
    font-size: 1.5em;
    background: #F90;
    border: 0;
    margin-bottom: 1em;
    color: #FFF;
    padding: 0.2em 0.6em;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
    text-shadow: 1px 1px 1px rgba(0,0,0,0.5);
}

.botao:hover {
    background: #FB0;
    box-shadow: inset 2px 2px 2px rgba(0,0,0,0.2);
    text-shadow: none;
}

.campo input[type="password"],
.campo input[type="email"] {
    padding: 0.2em;
    border: 1px solid #CCC;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
    display: block;
}

.campo input:focus {
    background: #FFC;
}

h1{
    font-style:bold;
  font-family: "Segoe UI";
  color:black;
}