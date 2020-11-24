<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,300&display=swap" rel="stylesheet">
    
    <style type="text/css">
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */


/* Document
   ========================================================================== */


/**
 * 1. Correct the line height in all browsers.
 * 2. Prevent adjustments of font size after orientation changes in iOS.
 */

html {
    line-height: 1.15;
    /* 1 */
    -webkit-text-size-adjust: 100%;
    /* 2 */
}


/* Sections
     ========================================================================== */


/**
   * Remove the margin in all browsers.
   */

body {
    margin: 0;
}


/**
   * Render the `main` element consistently in IE.
   */

main {
    display: block;
}


/**
   * Correct the font size and margin on `h1` elements within `section` and
   * `article` contexts in Chrome, Firefox, and Safari.
   */

h1 {
    font-size: 2em;
    margin: 0.67em 0;
}


/* Grouping content
     ========================================================================== */


/**
   * 1. Add the correct box sizing in Firefox.
   * 2. Show the overflow in Edge and IE.
   */

hr {
    box-sizing: content-box;
    /* 1 */
    height: 0;
    /* 1 */
    overflow: visible;
    /* 2 */
}


/**
   * 1. Correct the inheritance and scaling of font size in all browsers.
   * 2. Correct the odd `em` font sizing in all browsers.
   */

pre {
    font-family: monospace, monospace;
    /* 1 */
    font-size: 1em;
    /* 2 */
}


/* Text-level semantics
     ========================================================================== */


/**
   * Remove the gray background on active links in IE 10.
   */

a {
    background-color: transparent;
}


/**
   * 1. Remove the bottom border in Chrome 57-
   * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
   */

abbr[title] {
    border-bottom: none;
    /* 1 */
    text-decoration: underline;
    /* 2 */
    text-decoration: underline dotted;
    /* 2 */
}


/**
   * Add the correct font weight in Chrome, Edge, and Safari.
   */

b,
strong {
    font-weight: bolder;
}


/**
   * 1. Correct the inheritance and scaling of font size in all browsers.
   * 2. Correct the odd `em` font sizing in all browsers.
   */

code,
kbd,
samp {
    font-family: monospace, monospace;
    /* 1 */
    font-size: 1em;
    /* 2 */
}


/**
   * Add the correct font size in all browsers.
   */

small {
    font-size: 80%;
}


/**
   * Prevent `sub` and `sup` elements from affecting the line height in
   * all browsers.
   */

sub,
sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
}

sub {
    bottom: -0.25em;
}

sup {
    top: -0.5em;
}


/* Embedded content
     ========================================================================== */


/**
   * Remove the border on images inside links in IE 10.
   */

img {
    border-style: none;
}


/* Forms
     ========================================================================== */


/**
   * 1. Change the font styles in all browsers.
   * 2. Remove the margin in Firefox and Safari.
   */

button,
input,
optgroup,
select,
textarea {
    font-family: inherit;
    /* 1 */
    font-size: 100%;
    /* 1 */
    line-height: 1.15;
    /* 1 */
    margin: 0;
    /* 2 */
}


/**
   * Show the overflow in IE.
   * 1. Show the overflow in Edge.
   */

button,
input {
    /* 1 */
    overflow: visible;
}


/**
   * Remove the inheritance of text transform in Edge, Firefox, and IE.
   * 1. Remove the inheritance of text transform in Firefox.
   */

button,
select {
    /* 1 */
    text-transform: none;
}


/**
   * Correct the inability to style clickable types in iOS and Safari.
   */

button,
[type="button"],
[type="reset"],
[type="submit"] {
    -webkit-appearance: button;
}


/**
   * Remove the inner border and padding in Firefox.
   */

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
    border-style: none;
    padding: 0;
}


/**
   * Restore the focus styles unset by the previous rule.
   */

button:-moz-focusring,
[type="button"]:-moz-focusring,
[type="reset"]:-moz-focusring,
[type="submit"]:-moz-focusring {
    outline: 1px dotted ButtonText;
}


/**
   * Correct the padding in Firefox.
   */

fieldset {
    padding: 0.35em 0.75em 0.625em;
}


/**
   * 1. Correct the text wrapping in Edge and IE.
   * 2. Correct the color inheritance from `fieldset` elements in IE.
   * 3. Remove the padding so developers are not caught out when they zero out
   *    `fieldset` elements in all browsers.
   */

legend {
    box-sizing: border-box;
    /* 1 */
    color: inherit;
    /* 2 */
    display: table;
    /* 1 */
    max-width: 100%;
    /* 1 */
    padding: 0;
    /* 3 */
    white-space: normal;
    /* 1 */
}


/**
   * Add the correct vertical alignment in Chrome, Firefox, and Opera.
   */

progress {
    vertical-align: baseline;
}


/**
   * Remove the default vertical scrollbar in IE 10+.
   */

textarea {
    overflow: auto;
}


/**
   * 1. Add the correct box sizing in IE 10.
   * 2. Remove the padding in IE 10.
   */

[type="checkbox"],
[type="radio"] {
    box-sizing: border-box;
    /* 1 */
    padding: 0;
    /* 2 */
}


/**
   * Correct the cursor style of increment and decrement buttons in Chrome.
   */

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
    height: auto;
}


/**
   * 1. Correct the odd appearance in Chrome and Safari.
   * 2. Correct the outline style in Safari.
   */

[type="search"] {
    -webkit-appearance: textfield;
    /* 1 */
    outline-offset: -2px;
    /* 2 */
}


/**
   * Remove the inner padding in Chrome and Safari on macOS.
   */

[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none;
}


/**
   * 1. Correct the inability to style clickable types in iOS and Safari.
   * 2. Change font properties to `inherit` in Safari.
   */

 ::-webkit-file-upload-button {
    -webkit-appearance: button;
    /* 1 */
    font: inherit;
    /* 2 */
}


/* Interactive
     ========================================================================== */


/*
   * Add the correct display in Edge, IE 10+, and Firefox.
   */

details {
    display: block;
}


/*
   * Add the correct display in all browsers.
   */

summary {
    display: list-item;
}


/* Misc
     ========================================================================== */


/**
   * Add the correct display in IE 10+.
   */

template {
    display: none;
}


/**
   * Add the correct display in IE 10.
   */

[hidden] {
    display: none;
}

*,
*:before,
*:after {
    box-sizing: inherit;
}


/* REM  */

html {
    box-sizing: border-box;
    font-size: 62.5%;
    /* Reset para REMS - 62.5 = 10 PX de 16PX */
}

*,
*:before,
*:after {
    box-sizing: inherit;
}


/* Fuentes */

body {
    font-family: 'Lato', sans-serif;
    font-size: 1.6rem;
    line-height: 2;
    height: 100vh;
}


/* Globales */

img {
    max-height: 100%;
}


/* Header */

.cover {
    background-color: #000918;
    margin: 0px;
    padding: 1.5rem 0rem 0rem 0rem;
}

.contenedor {
    max-width: 120rem;
}

.contenido-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
}

.imagen-logo {
    max-width: 15rem;
    margin-left: 5rem;
    margin-bottom: 3rem;
}

.h1class {
    color: whitesmoke;
    font-size: 900;
    text-decoration: underline;
}
.centrar{
    padding-top: 3rem;
    padding-left: 2rem;
}

.centrar-tabla{
    padding: 5rem 0rem 5rem 10rem;
}

</style>

</head>

<body>
    <header class="cover">
        <div class="contenedor contenido-header">
           <img src="logoUnitec.png" alt="logoUnitec" class="imagen-logo">
            <h1 class="h1class">Proyecto Bases de datos con PHP</h1>
        </div>
        <!-- Termina Contenedor contenido-header -->
    </header>
    <!-- Inicia Codigo PHP -->

    <div class="centrar-tabla">
        <?php
        $pass="";
        $servidor="localhost";
        $usuario="root";
        $basedatos="sakila";
        $coneccion=mysqli_connect($servidor,$usuario,$pass,$basedatos);
        if(!$coneccion)
        {
            echo("Error en la conexion: ".mysqli_connect_error());
        }
        else
        {
            $sql="select mysql.user.Host,mysql.user.User from mysql.user";
            $resultado=mysqli_query($coneccion,$sql);
            if (!$resultado)
            {
                echo "No existe ningún usuario en el usuario"."<br>";
            }
            else
            {
                echo '<table width="50%" border="1">';
                echo ' <tr>';
                echo '      <th scope="col">Numero</th>';
                echo '      <th scope="col">Host</th>';
                echo '      <th scope="col">User</th>';
                echo ' </tr>';
                $num_users=mysqli_num_rows($resultado);
                $num_col=mysqli_num_fields($resultado);
                echo "El número de usuarios dentro del servidor es de ".$num_users."<br>";
                for ($i=0; $i<$num_users;$i++)
                {
                    $base=mysqli_fetch_array($resultado);
                    echo '<tr>';
                    echo '  <td>'.$i.'</td>';
                    for($j=0;$j<$num_col;$j++)
                    {
                    echo '<td>'.$base[$j].'</td>'; 
                    }
                    echo '</tr>';
                }
                echo '</table>';
            }
            mysqli_close($coneccion);
        }

        echo '<div class="centrar">';
        echo '<form action="../index.html" method="post">';
        echo '<input type="submit" formaction="../index.html" value="Regresar">';
        echo '</form>';
        echo '</div>';

        ?>
    </div>

<!-- Termina PHP -->
</body>

</html>