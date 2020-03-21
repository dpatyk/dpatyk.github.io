<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabele</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <table>
        <tr>
            <th>col 1</th>
            <th>col 2</th>
            <th>col 3</th>
        </tr>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
        </tr>
        <tr>
            <td>4</td>
            <td>5</td>
            <td>6</td>
        </tr>
    </table>

    <table>
        <tr>
            <th></th>
            <th scope="col">sobota</th>
            <th scope="col">niedziela</th>
        </tr>
        <tr>
            <th scope="row">Ilość sprzedanch biletów w kinie</th>
            <td>100 szt.</td>
            <td>80 szt.</td>   
        </tr>
        <tr>
            <th scope="row">Wartość sprzedanych biletów</th>
            <td>10000 zł</td>
            <td>8000 zł</td>  
        </tr>    
    </table>


    <br>

    <table class="tg">
    <tr>
        <td colspan="2" rowspan="2"><br>0.1<br></td>
        <td colspan="2">1.2</td>
    </tr>
    <tr>
        <td colspan="2" rowspan="2">2.2</td>
    </tr>
    <tr>
        <td colspan="2">3.1</td>
    </tr>
    <tr>
        <td colspan="4">4.1</td>
    </tr>
    </table>

</body>
</html>