<style>
    :root{
    --cor-laranja: #FFA726;

    --cor-verde-escuro: #00796B;

    --cor-cinza-escuro: #424242;

    --cor-branco: #FFFFFF;
    }
    *{
        margin: 0;
        padding: 0;
        font-family: 'Arial', Helvetica, sans-serif;
    }
    header {
        height: 100px;
        width: 100%;
        background-color: var(--cor-laranja);
        display: flex;
        justify-content: space-around;
    }
    .logo {
        background-color: var(--cor-verde-escuro);
        border-radius: 100%;
        width: 75px;
        height: 75px;
        margin-top: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    nav {
        margin-top: 20px;
    }
    ul {
        list-style: none;
    }
    ul:hover a {
        opacity: 50%;
        transition: 1s;
    }
    ul:hover form input {
        opacity: 50%;
        transition: 1s;
    }
    ul:hover form button {
        opacity: 50%;
        transition: 1s;
    }
    li {
        display: inline-block;
    }
    .ancora_header {
        text-decoration: none;
        color: var(--cor-branco);
        background-color: var(--cor-verde-escuro);
        border-radius: 5px;
        margin: 10px;
        padding: 10px;
    }
    .ancora_header:hover {
        background-color: var(--cor-cinza-escuro);
        opacity: 100%;
        transition: 1s;
    }
    .button_header {
        color: var(--cor-branco);
        background-color: var(--cor-verde-escuro);
        border: 0;
        border-radius: 5px;
        padding: 10px;
        font-size: medium;
        cursor: pointer;
        margin: 10px;
    }
    .button_header:hover {
        background-color: var(--cor-cinza-escuro);
        opacity: 100%;
        transition: 1s;
    }
    .container {
        background-color: var(--cor-verde-escuro);
        height: 750px;
        display: flex;
        justify-content: center;
    }
    .cont {
        background-color: var(--cor-branco);
        padding: 30px;
        width: 80%;
        margin-bottom: 15px;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        box-shadow: 10px 5px 5px var(--cor-cinza-escuro);
    }
    h2 {
        color: var(--cor-cinza-escuro);
    }
    table {
        border-collapse: collapse;
        height: 300px;
        margin-top: 10%;
        margin-left: 25%;
        margin-right: 25%;
        margin-bottom: 10px;
    }
    td {
        border: 1px solid black;
        padding: 5px;
        text-align: center;
    }
    tr {
        background-color: var(--cor-branco);
    }
    tr:hover {
        background-color: var(--cor-laranja);
        color: var(--cor-branco);
        transition: 0.4s;
    }
    th {
        border: 1px solid black;
        background-color: var(--cor-verde-escuro);
        color: var(--cor-branco);
        padding: 5px;
    }
    footer {
        bottom: 0;
        position: relative;
        background-color: var(--cor-laranja);
        display: flex;
        justify-content: center;
        height: 100px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    #p_footer {
        color: var(--cor-branco);
    }
    #ancora_footer {
        color: var(--cor-branco);
        text-decoration: none;
    }
    #ancora_footer:hover {
        color: var(--cor-cinza-escuro);
        box-shadow: 0 2px 00 currentColor;
        transition: 1s;
    }
</style>