<?php require("../../includes/header.php"); ?><h1>The Treasure Hunt</h1><div class="content">
<p>Once N number of friends set out on a treasure hunt of hidden gold coins on the sea shore of ByteLand .After  a lot of hunting they finally got the treasure of gold .They do not know how many coins are there in the treasure box. They decided to divide it equally among themselves in the morning.</p>
<p>At night, one friend  woke up, divided the coins into N equal parts after throwing 1 coin into the sea as a Bytelandian custom, hid his pile, recombined the other N-1 piles, and went back to sleep. Later that night, each of the other friends did the same thing one after the other: Each threw 1 coin into the sea as a custom of ByteLand and  then took 1/N of the remaining ones for himself.</p>
<p>In the morning, they divided all the remaining gold coins among themselves equally with no coins remaining ,after throwing 1 coin into the sea as a custom for the last time. What is the minimum number of coins  that could have been in the original treasure ?</p>
<h3>Input</h3>
<p>First line contains T ,number of test cases.T lines follow. For every test case , line contains an integer N ,the number of friends set out for treasure hunt.</p>
<h3>Output</h3>
<p>Output in each new line 2 spaced integers X and Y . <br /><br />
X is  the minimum number of gold coins in the original treasure that they find initially. <br /><br />
Y is the number of coins that each of them gets in the morning after dividing the coins (This doesn't include the number of coins that they kept for themselves in the night).</p>
<p><br />Print the answer modulo 10^9+7</p>
<h3>Sample Input</h3>
<p>3<br /><br />
1<br /><br />
2<br /><br />
5<br /></p>
<h3>Sample Output</h3>
<p>1 0<br /><br />
7 0<br /><br />
15621 1023<br /></p>
<h3>Constraints</h3>
<p>1&lt;= T &lt;= 2*10^5<br /><br />
1&lt;= N &lt;= 10^6<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/snehansu6631">snehansu6631</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-09-2013</td>
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