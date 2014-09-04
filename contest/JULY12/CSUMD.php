<?php require("../../includes/header.php"); ?><h1>My Fair Coins</h1><div class="content">

<div>
<p>
        There are coins of 2 different denominations in Crazyland, 1-cent coins and 2-cent coins. As all the coins do, even these coins have two faces, i.e. heads and tails.<br />
        Your task is to find out the the number of ways to create a linear arrangement of these coins so that their sum is <b>N </b>cents. The only condition on the linear arrangement is that<br />
        the first coin in the arrangement should always face heads. All other coins could either face head or face tail.<br />
        <br/>
    </br/></p>
<p>
        Take <b>N = 2</b> as an example. The possible arrangements are <b>(1H, 1H), (2H), (1H, 1T), </b>where <b>H</b> is heads and <b>T</b> is tails.<br />
        Therefore there are <b>3</b> possible arrangements that sum up to 2-cents.
    </p>
<p>
        <b>Note</b>
    </p>
<p>
        While counting make sure that you count heads and tails as different.
    </p>
<p>
        <b>Input</b>
    </p>
<p>
        First line contains <b>T</b>, the number of cases.
    </p>
<p>
        <b>T</b> lines follow, each containing a single number <b>N</b>, the required sum.
    </p>
<p>
        <b>Constraints</b>
    </p>
<p>
        0 &lt;= <b>T </b>&lt;= 10000
    </p>
<p>
        1 &lt;= <b>N</b> &lt;= 1000000000<b></b>
    </p>
<p>
        <b>Output</b>
    </p>
<p>
For each case the output should be a single integer representing the number of such arrangements possible. As this can be very large print it modulo        <b>1000000007</b>.
    </p>
<p>
<b>Sample Input</b></p>
<pre>
3
1
2
3
</pre><p>
<b>Sample Output</b></p>
<pre>
1
3
8
</pre>
</div>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kaushik_iska">kaushik_iska</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-05-2012</td>
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