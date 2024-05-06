<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combined HTML CSS</title>
    <style>
        :root {
            --menu-width: 37.5em; /* Width of menu */
            --items: 4; /* Number of items you have */
            --item-width: calc(var(--menu-width) / var(--items));
        }

        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(45deg, #102eff, #d2379b);
            font-family: 'Roboto', sans-serif;
            height: 100vh;
            overflow: hidden;
            width: 100vw;
        }

        nav {
            width: var(--menu-width);
            display: flex;
            transform-style: preserve-3d;
            justify-content: space-evenly;
            position: relative;
            z-index: 2;
            margin: 0px auto;
            perspective: 2000px;
            flex-wrap: wrap;
            top: 3em;
        }

        nav .menu-item {
            color: white;
            font-weight: 600;
            transform-style: preserve-3d;
            flex-grow: 1;
            display: flex;
            flex-basis: var(--item-width);
            box-sizing: border-box;
            padding: 1em 1.5em;
            justify-content: center;
            perspective: 200px;
            letter-spacing: 0.5px;
            min-height: 7.5em;
        }

        nav .menu-text, nav .menu-text a {
            font-size: 1em;
            color: white;
            text-decoration: none;
            text-shadow: 0 1px 5px rgba(0,0,0,0.1);
            transition: color 0.1s ease-out;
            text-align: center;
        }

        nav .menu-text a:hover {
            color: rgba(255,255,255,0.5);
        }

        #sub-menu-holder {
            pointer-events: none;
            color: rgba(0,0,0,0.5);
            font-weight: normal;
            padding: 1em;
            position: absolute;
            transition: opacity 2 ease-out;
            transform: rotateX(-25deg) scale(1);
            transform-origin: 50% 7em 0em;
            opacity: 0;
            box-shadow: 0 2px 7px rgba(0,0,0,0.1), 0 2px 20px rgba(0,0,0,0.3);
            box-sizing: border-box;
            top: 3rem;
            border-radius: 10px;
            background: white;
            display: block;
            height: 300px;
            width: calc(var(--menu-width) * 1.5);
        }

        #sub-menu-container {
            position: absolute;
            z-index: -1;
            min-width: 100%;
            top: 2.5em;
            width: 100%;
        }

        nav .menu-item:hover ~ #sub-menu-container #sub-menu-holder {
            animation: clipPath 0.25s ease-out 1 forwards;        
            transition: clip-path 0.25s ease-out, left 0.15s ease-out, height 0.15s ease-out;
            opacity: 1;
            right: auto;
        }

        nav .menu-item:nth-of-type(1):hover ~ #sub-menu-container #sub-menu-holder,
        nav .menu-item:nth-of-type(4):hover ~ #sub-menu-container #sub-menu-holder {
            clip-path: inset(0 28.75em 0 0 round 10px);
            height: 14em;
        }

        nav .menu-item:nth-of-type(2):hover ~ #sub-menu-container #sub-menu-holder,
        nav .menu-item:nth-of-type(3):hover ~ #sub-menu-container #sub-menu-holder {
            clip-path: inset(0 15em 0 0 round 10px);
        }

        nav .menu-item:nth-of-type(1):hover ~ #sub-menu-container #sub-menu-holder {
            left: calc(-9em + -1px);
        }
        nav .menu-item:nth-of-type(2):hover ~ #sub-menu-container #sub-menu-holder {
            left: calc(-6.5em + -1px);
            height: 18.75em;
        }
        nav .menu-item:nth-of-type(3):hover ~ #sub-menu-container #sub-menu-holder {
            left: calc(2.75em + 1px);
            height: 24.5em;
        }
        nav .menu-item:nth-of-type(4):hover ~ #sub-menu-container #sub-menu-holder {
            left: calc(19em + 1px);
        }

        .menu-item .sub-menu {
            position: absolute;
            top: 7em;
            color: rgba(0,0,0,0.5);
            border-radius: 10px;
            min-width: 27.5em;
            pointer-events: none;
            box-sizing: border-box;
            z-index: 999;
            margin-left: -5em;
            clip-path: inset(0 10em 10em 15em);
            opacity: 0;
            font-weight: initial;
            padding: 1.5em;
            transition: all 0.25s ease-out, opacity 0.25s ease-in, margin-left 0.25s ease-out, clip-path 0.15s ease-out;
        }

        .menu-item .sub-menu.double {
            min-width: 41.25em;
            height: 18.75em;
            display: grid;
            grid-template-columns: 54% 50%;
        }
        .menu-item .sub-menu.triple {
            min-width: 41.25em;
            height: 25em;
            display: grid;
            padding: 1.5em 2.5em;
            grid-template-columns: 55% 45%;
        }
        .menu-item:hover .sub-menu {
            pointer-events: all;
            clip-path: inset(0 0 0 0);
        }

        .menu-text:after {
            transition: bottom 0.25s ease-out, opacity 0.01s ease-out 0.01s;
            opacity: 0;
            content: '';
            position: absolute;
            pointer-events: none;
            bottom: -5em;
            left: calc(50% - 10px);
            border-color: transparent transparent white transparent;
            border-width: 10px;
            border-style: solid;
        }
        .menu-item:hover .menu-text:after {
            bottom: 0.5em;
            opacity: 1;
            transition: bottom 0.25s ease-out, opacity 0.01s ease-out 0.15s;
        }
        .menu-item:hover .sub-menu {
            opacity: 1;
            margin-left: 0;
        }

        .menu-item:hover ~ #sub-menu-container #sub-menu-holder  {
            transition: transform 0.25s ease-out, opacity 0.25s ease-out, clip-path 0.25s ease-out;
        }

        @keyframes clipPath {
            0% {
                opacity: 0;
            }
            100% {
                transform: rotateX(0deg) scale(1);
                top: 4.5em;
            }
        }
    </style>
</head>


</body>
</html>
