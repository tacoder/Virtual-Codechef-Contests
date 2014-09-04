<?php require("../../includes/header.php"); ?><h1>Save Energy</h1><div class="content">
<p> </p>
<p>An area is affected badly by disaster and thus the whole land is divided in to m<sup>2</sup> equi-sized pieces forming a square grid. Each piece has also gained some altitude. Therefore, a helicopter is deployed to help people trapped on the land. Only some cells of grid have inhabitants leaving other cells empty. Helicopter starts from one of the cell of the gird thus forming it as its base centre. It can move horizontally, vertically and diagonally along the adjacent square grids. Since, helicopter flies very close to the ground it has to keep moving up and down according to the altitude of the land beneath it. Helicopter has to distribute the food among the affected people, i.e it has to reach each cell which is inhabited by people. Fuel consumed in the helicopter is directly proportional to the difference in the maximum altitude and minimum altitude encountered during the journey. You being a good citizen need to help the pilot, by telling him the most optimum path in which helicopter uses least fuel. Also, after distributing food helicopter returns to its base centre.</p>
<p> </p>
<h3>Input</h3>
<p>The input consists of an integer <b>m</b> denoting the length of the side of the square grid.<br />
Following m lines represents the land in corresponding matrix row. Pilot Base of Helicopter is marked by 'P' which appears exactly once while character 'K' denoting the inhabited land appears atleast once. Rest of the cells are denoted by '.'<br />
Following m lines, each contains m positive integers, representing the altitude of each cell formed due to disaster.</p>
<p> </p>
<h3>Output</h3>
<p>Outputs the difference between the maximum and minimum altitude encountered by the helicopter in optimum path.</p>
<p> </p>
<h3>Constraints</h3>
<p>2 ≤ m ≤ 50<br />
Altitude of each land ≤ 999999</p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
P..
.KK
...
3 2 4
7 4 2
2 3 1
<b>Output:</b>
2
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divyambansal">divyambansal</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-10-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>