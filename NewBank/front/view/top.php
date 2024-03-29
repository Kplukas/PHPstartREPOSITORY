<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'Untitled Page' ?></title>
    <style>
        body {
            background-color: gray;
            margin: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI',
                Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue',
                sans-serif;
        }
        header {
            display: inline-block;
            background-color: rgba(25, 25, 112, 0.5);
            width: 100%;
            height: 60px;
            justify-content: center;
            align-items: center;
        }
        .bank {
            width: 48px;
            display: inline;
            float: left;
            margin: 10px;
            margin-left: 20px;
        }
        .clock {
            display: inline;
            float: left;
            margin: 15px;
        }
        main {
            margin: 20px;
            background-color: rgba(255, 255, 255, 0.5);
            min-height: 70vh;
            border-radius: 20px;
            border-bottom: 3px solid white;
            border-top: 3px solid white;
            border-radius: 20px;
        }
        .block {
            display: block;
        }
        /* NAV ------------------------------------------------------------------------------------*/
        .menu {
            display: inline;
            float: right;
        }
        .menu-link {
            text-decoration: none;
            display: inline-block;
            margin: 10px;
            padding: 0.5em 0.75em;
            border: 2px solid white;
            border-radius: 5px;
            text-transform: uppercase;
            font-size: 15px;
            font-weight: bold;
            color: white;
            transition: 0.3s;
        }
        .menu-link:hover {
            margin: 5px;
            font-size: 17px;
            padding: 0.55em 0.8em;
            border: 2px solid black;
            color: black;
            background-color: white;
        }
        /* Footeris ------------------------------------------------------------------------------------*/
        footer {
            width: 100%;
            height: 18vh;
            background-color: rgba(25, 25, 112, 0.5);
        }
        .div1 {
            height: 17vh;
            width: 60vh;
            margin: 5px;
            display: inline;
            float: left;
            border-right: 2px solid white;
        }
        .div2 {
            height: 17vh;
            width: 60vh;
            margin: 5px;
            display: inline;
            float: right;
            border-left: 2px solid white;
        }
        .h-citata {
            text-align: center;
            justify-content: center;
            font-size: 30px;
            text-transform: uppercase;
            color: white;
        }
        .citata {
            font-size: 20px;
            text-align: center;
            color: white;
        }
        /* New saskaita ------------------------------------------------------------------------------------*/
        .skurimas {
            text-align: center;
            justify-content: center;
            margin: 10px;
            font-size: 30px;
            text-transform: uppercase;
            color: white;
            border-bottom: 2px solid white;
        }
        .msk {
            justify-content: center;
            align-items: center;
        }
        .form-holder1 {
            display: grid;
            align-items: center;
            justify-content: center;
        }
        .form {
            padding: 20px;
            font-size: 20px;
            font-weight: bold;
        }
        .label1 {
            margin-left: 3px;
            font-size: 20px;
            color: midnightblue;
            border-top: 2px solid white;
        }
        .input1 {
            background-color: rgba(255, 255, 255, 0.5);
            color: black;
            font-size: 18px;
            line-height: 2em;
            padding-left: 20px;
            padding-right: 20px;
            border-radius: 10px;
        }
        .btn1 {
            background-color: rgba(25, 25, 112, 0.51);
            margin: 10px;
            padding: 0.5em 0.75em;
            border: 3px solid white;
            border-radius: 5px;
            text-transform: uppercase;
            font-size: 15px;
            font-weight: bold;
            color: white;
            transition: 0.3s;
        }
        .btn1:hover {
            font-size: 16px;
            border: 3px solid black;
            border-radius: 5px;
            color: black;
            background-color: white;
            cursor: pointer;
        }
        /* Saskaitos ------------------------------------------------------------------------------------*/
        .nera {
            color: white;
            text-decoration: underline;
            font-size: 35px;
            margin: 30px;
            padding: 5px;
            border: 2px solid midnightblue;
            background-color: rgba(25, 25, 112, 0.5);
            border-radius: 5px;
            text-align: center;
        }
        .nera-p {
            color: midnightblue;
            font-size: 23px;
            font-weight: bold;
            margin-left: 35px;
            margin-right: 10px;
        }
        .nera-a {
            text-transform: uppercase;
            font-size: 30px;
            font-weight: bold;
            color: white;
        }
        .list {
            padding: 15px;
            margin-left: 15px;
            margin-right: 15px;
            border: 2px solid midnightblue;
            border-radius: 5px;
            background-color: rgba(25, 25, 112, 0.5);
            min-height: calc(70vh - 170px);
            width: fit-content;
        }
        .list-item {
            display: inline-block;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.5);
            margin: 10px;
            width: 320px;
        }
        .list-name {
            font-size: 20px;
            text-transform: uppercase;
        }
        .list-iban {
            font-size: 15px;
        }
        .list-suma {
            background-color: white;
            display: inline;
            float: right;
            padding-left: 10px;
            padding-right: 10px;
            width: 100px;
            text-align: right;
        }
        .btn-list {
            display: block;
            width: 300px;
            align-self: center;
            line-height: 2em;
            background-color: rgba(255, 255, 255, 0.498);
            color: black;
            font-weight: bold;
            text-transform: uppercase;
            margin: 5px;
            border: 3px solid midnightblue;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        .btn-list:hover {
            background-color: white;
        }
        .list-istrinta {
            padding: 15px;
            background-color: rgba(187, 0, 37, 0.318);
            border: 2px solid black;
            border-radius: 20px;
            margin: 5px;
        }
        /* Saskaita ------------------------------------------------------------------------------------*/
        .useris-col1 {
            background-color: rgba(255, 255, 255, 0.5);
            width: 40%;
            min-height: 40vh;
            margin-left: 30%;
            padding: 20px;
            color: white;
        }
        .useris {
            padding-left: 20px;
            font-size: 20px;
            line-height: 4em;
            text-transform: uppercase;
            background-color: rgba(25, 25, 112, 0.5);
        }
        .useris-saskaita {
            text-align: center;
            margin: 30px;
            margin-left: 100px;
            margin-right: 100px;
            padding: 20px;
            border-top: 3px solid white;
            border-bottom: 3px solid white;
            border-radius: 20px;
            background-color: rgba(25, 25, 112, 0.5);
            color: white;
            text-transform: uppercase;
            background-color: rgba(25, 25, 112, 0.5);
        }
        .useris-suma {
            color: black;
            background-color: white;
            padding-left: 50px;
            padding-right: 10px;
            width: 200px;
            text-align: right;
        }
        .btn-user {
            align-self: center;
            line-height: 2em;
            background-color: white;
            color: black;
            font-weight: bold;
            text-transform: uppercase;
            margin: 5px;
            border: 3px solid midnightblue;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        .btn-user:hover {
            background-color: rgba(25, 25, 112, 0.2);
            color: white;
            border: 3px solid white;
        }
        .input-user {
            color: black;
            background-color: white;
            padding-left: 50px;
            padding-right: 10px;
            width: 200px;
            text-align: right;
            line-height: 2em;
            border: none;
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <div>
            <img src="#" alt="logo">
            <iframe class="clock" src="https://free.timeanddate.com/clock/i8n7u4iy/n529/tllt22/fn15/fcfff/tct/pct/ftb/bas2/bacfff/pa5" frameborder="0" width="65" height="30" allowtransparency="true"></iframe>
        </div>
        <nav class="menu">
            <a class ="menu-link" href="<?= URL . 'titulinis/' ?>">Titulinis</a>
            <a class ="menu-link" href="<?= URL . 'saskaitos/create/' ?>">Nauja sąskaita</a>
            <a class ="menu-link" href="<?= URL . 'saskaitos/' ?>">Sąskaitų sąrašas</a>
        </nav>
    </header>