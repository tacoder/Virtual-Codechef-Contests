<?php require("../../includes/header.php"); ?><h1>Photo of your friends</h1><div class="content">

<p> </p>
<p>You have n friends and you want to take m pictures of them. Exactly two of your friends should appear in each picture and no two pictures should contain the same pair of your friends. So if you have n = 3 friends you can take 3 different pictures, each containing a pair of your friends.</p>
<p>Each of your friends has an attractiveness level which is specified by the integer number a<sub>i</sub> for the i-th friend. You know that the attractiveness of a picture containing the i-th and the j-th friends is equal to the exclusive-or (xor operation) of integers a<sub>i</sub> and a<sub>j</sub>.</p>
<p>You want to take pictures in a way that the total sum of attractiveness of your pictures is maximized. You have to calculate this value. Since the result may not fit in a 32-bit integer number, print it modulo 1000000007 (10^9 + 7).</p>
<p> </p>
<h3>Input</h3>
<p>The first line of input contains two integers n and m — the number of friends and the number of pictures that you want to take.<br />
Next line contains n space-separated integers a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>n</sub> — the values of attractiveness of the friends.
</p>
<h3>Output</h3>
<p>The only line of output should contain an integer — the optimal total sum of attractiveness of your pictures</p>
<p> </p>
<h3>Constraints</h3>
<p>
1 &lt;= n &lt;= 5*10^4 </p>
<p>0 &lt;= m &lt;= n*(n-1)/2 </p>
<p>0 ≤ a<sub>i</sub> ≤ 10^9</p>
<h3>Sample input 1: </h3>
<p>3 1</p>
<p>1 2 3</p>
<h3>Sample output 1: </h3>
<p>3</p>
<h3>Sample input 2: </h3>
<p>3 3</p>
<p>1 2 3</p>
<h3>Sample output 2: </h3>
<p>6</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sibashis">sibashis</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-03-2013</td>
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