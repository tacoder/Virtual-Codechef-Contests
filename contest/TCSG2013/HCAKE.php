<?php require("../../includes/header.php"); ?><h1>Tower of HanoiCake</h1><div class="content">

<p>Chef Polo has recently been observing the structure of Tower of Hanoi.<br />
So he decides to build his own tower and names it as Tower of HanoiCake.<br />
He decides to build it using circular pancakes.<br />
To build his tower he has to arrange them vertically, one upon another.<br />
He knows that if he places a pancake of radius<b> r1</b> above pancake of radius <b>r2</b> such that <b>r1 >= r2</b>,<br />
the whole tower will shake and pancake with radius <b>r1</b> will fall on the floor and hence get wasted. Since Chef Polo is wise, he selects the pancakes in such a way that no pancake falls on the floor.<br/><br />
His assistants have baked all the pancakes for him already,labelled them with their radius and have arranged them in a row.<br/><br />
He starts his selection of pancakes in same order as they are placed in the row.He has only one chance to select each pancake.<br/><br />
If he selects a pancake, he places it on the top of his tower else he moves on to the next one.<br/><br />
You are required to find the <b>maximum height</b> of the tower which he can build.<br />
 </br/></br/></br/></br/></p>
<h3>Input</h3>
<p>The first line contains the number of test cases <b>T</b>.<br />
First line of each test case contains <b>n</b> (number of pancakes in the row)<br />
Next line contains array <b>R</b> of <b>n</b> integers denoting the radii of pancakes.<br />
.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the maximum height of the tower he can build.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>10^5</b></li>
<li><b>1</b> ≤ <b>R[1...n]</b> ≤ <b>10^9</b></li>
</ul>
<h3>Sample Input:</h3>
<p>2</p>
<p>5</p>
<p>8 7 2 3 4</p>
<p>8</p>
<p>2 9 4 6 5 2 2 1</p>
<h3>Sample Output:</h3>
<p>3</p>
<p>5</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kuldeepfouzdar">kuldeepfouzdar</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
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