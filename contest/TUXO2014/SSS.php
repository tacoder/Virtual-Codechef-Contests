<?php require("../../includes/header.php"); ?><h1>Surathkal SuperStars</h1><div class="content">
<p> </p>
<p>Mr. Vallya,the rich playboy billionaire , has recently bought an IPL team Surathkal SuperStars (SSS) . Now he has the challenging task of buying the best possible team in the IPL auction . For this , he is aiming to make a priority order list in which he wants to buy each player . </p>
<p>The total number of players available for auction is N . As we all know he is quite busy with his famous PingFisher Calendar photoshoot , he has decided to give you the task of finding the total number of possible priority lists for N players. </p>
<p>As the number can be quite large you need to find it modulo P , where P is a prime number and is close to N . He asks T such queries.
</p>
<p> </p>
<h3>Input</h3>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. Next T lines contains T queries of the form “N P”. (quotes for clarity)</li>
<p> </p>
<h3>Output</h3>
<li>Output exactly T lines containing the desired answer.</li>

<p> </p>
<h3>Constraints</h3>
<pre>
1 &lt;= T &lt;= 1000
1 &lt; P &lt;= 2*10^9
1 &lt;= N &lt;= 2*10^9
Abs(N-P) &lt;= 1000
</pre><p> </p>
<h3>Example</h3>
<pre><b>Input:</b>

3
2 5
5 11
21 71

<b>Output:</b>

2
10
6

</pre><p> </p>
<h3>Explanation</h3>
<p>In first test case we have 2 players , A and B . So the possible priority lists are {A,B} and {B,A} . So the answer is 2%5=2 </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tusharmakkar08">tusharmakkar08</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-04-2014</td>
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