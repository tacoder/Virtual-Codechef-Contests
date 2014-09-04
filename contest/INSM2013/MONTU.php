<?php require("../../includes/header.php"); ?><h1>Montu the destroyer</h1><div class="content">
<p>Montu is a village destroyer. Now there are N settlements in a village , and every settlement has 8 houses. Every house is represented as a binary number. Two houses (a,b) or (b,a) [order does not matter] are connected if their binary representation differs by a bit.</p>
<p>Cost of destroying the village is total cost of all edges. Cost of each edge is initially 0 .But as usual a hero Nicks comes along to save his village , what he does is manipulates the cost array. He takes a random X (such that 0&lt;=X&lt;=7 ) for every settlement (of 8 houses). Then he multiplies the paths of houses excluding {X(mod8),X+1(mod8),X+2(mod8),X+3(mod8)} with “-1” for every settlement.</p>
<p>Montu can destroy the village only if his compression power P , is greater than or equal to the (modified) cost of the village.</p>
<h3>Input</h3>
<p>First Line contains test case T. Each Test case contains 3 lines. First line of each test case contains N (no. of settlements) , second line contains N integers separated by a single space x1 , x1 …. xn. Third line contains Power P.</p>
<h3>Output</h3>
<p>Output answer to each testcase in a new line. YES if Montu can destroy the village and NO if he cannot.
</p>
<h3>Constraints</h3>
<ul>
<li><b>N</b> ≤ <b>40000 (is a power of 2)</b></li>
<li><b>0</b> ≤ <b>X</b> ≤ <b>7</b></li>
<li><b>-1000</b> ≤ <b>P</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
1
4
10
2
4 3
-7

<b>Output:</b>
YES
NO
<p>1) In first test case you have 8 houses, the houses that are connected are <br />(0,1) , (0,2) , (0,4) , (1,3) , (1,5) , (2,3) , (2,6) , (3,7) , (4,5) , (4,6) , (5,7) , (6,7) And X=4 =&gt; cost of edge <br />(0,1),(0,2),(0,4),(1,3),(1,5),(2,3),(2,6),(3,7) are multiplied by -1.Thus the cost of village is -4 .<br /> Hence Montu can destroy the village.
2) In case two the cost comes out to be -6 thus he CANNOT destroy the village.</p>

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/insomnia_adm">insomnia_adm</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-09-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.3 sec</td>
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