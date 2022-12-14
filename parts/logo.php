<style>
@font-face {
    font-family: logofont;
    src: url('/fonts/MangabeyRegular-rgqVO.otf');
}

#brand-name {
    transition: 1000ms;
    
    font-family: logofont;
    font-size: 2.5em;

    text-align: center;
    text-decoration: none;

    color: rgb(70, 82, 238);
}

#brand-name:hover {
    transition: 500ms;
    
    transform: scale(1.1);
}

#brand-name h1 span {
    margin-left: -10px;
}


#char-1:hover {
    color: rgb(255, 255, 0);
    text-shadow: 1px 1px 3px;
}

#char-2:hover {
    color: rgb(255, 221, 0);
    text-shadow: 1px 1px 3px;
}

#char-3:hover {
    color: rgb(255, 204, 0);
    text-shadow: 1px 1px 3px;
}

#char-4:hover {
    color: rgb(255, 187, 0);
    text-shadow: 1px 1px 3px;
}

#char-5:hover {
    color: rgb(255, 162, 0);
    text-shadow: 1px 1px 3px;
}

#char-6:hover {
    color: rgb(255, 128, 0);
    text-shadow: 1px 1px 3px;
}

#char-7:hover {
    color: rgb(255, 98, 0);
    text-shadow: 1px 1px 3px;
}

@media only screen and (max-width: 1100px) {
    #brand-name {
        font-size: 2em;
    }

    #brand-name h1 span {
        margin-left: -5px;
    }
}

@media only screen and (max-width: 600px) {
    #brand-name {
        font-size: 1.5em;
    }

    #brand-name h1 span {
        margin-left: 0r;
    }
}

</style>

<a href="/core/home.php" id="brand-name">
    <h1>
        <span id="char-1">L</span>
        <span id="char-2">e</span>
        <span id="char-3">a</span>
        <span id="char-4">r</span>
        <span id="char-5">n</span>

        <span id="char-6">+</span>
        <span id="char-7">+</span>
    </h1>
</a>