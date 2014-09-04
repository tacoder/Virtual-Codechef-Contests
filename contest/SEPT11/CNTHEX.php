<?php require("../../includes/header.php"); ?><h1>Counting Hexagons</h1><div class="content">

<p>Dexter wants to make a hexagon by using six sticks for sides from a collection of sticks of lengths <b>1, 2, 3, ... N</b>. Dexter will only make <b>valid</b> hexagons whose area is strictly positive.</p>
<p>He considers a hexagon "good" if the biggest stick has  <b>length at least L</b> and lengths of all the other sticks <b>are not more than X</b>.  A "good" hexagon does not have sticks of the <b>same length more than K times</b>. </p>
<p>How many ways he can make a "good" hexagon?</p>
<p>For example, when N=8, L=7, X=5, K=3: { 1,2,2,5,5,7 } is a good hexagon but {1,2,2,2,2,7}, { 1,2,3,4,5,6},{1,2,3,4,6,7} are not .</p>
<p>Two hexagons are considered different if their side length sets are different. For example {1,2,3,4,5,6} , {1,1,1,2,2,3} and {1,1,2,2,2,3} are all different </p>
<p>hexagons. But {1,2,3,4,5,6} and { 2,4,6,1,3,5} are not different.</p>
<h3>Input</h3>
<p> Input contains four integers <b>N( 2 &lt;= N &lt;= 10^9)</b> , <b>L ( 2 &lt;= L &lt;= N</b> and <b>N-L&lt;=100)</b> , <b> X(  1&lt;=X&lt; L )</b> and<b> K ( 1 &lt;=  K &lt;= 5) </b>.</p>
<h3>Output</h3>
<p> Output the number of different ways to make a "good" hexagon <b>% 1000000007.</b></p>
<h3>Sample Input</h3>
<pre>10 8 6 2</pre><h3>Sample Output</h3>
<pre>374</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rustinpiece">rustinpiece</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-08-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>6 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>