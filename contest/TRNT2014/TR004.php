<?php require("../../includes/header.php"); ?><h1>Modaks in Trinity</h1><div class="content">
<h3>
Problem Statement<br />
</h3>
<p>
Chef Diablo has set up a stall for selling his famous <i>Modaks</i> in the Trinity fest. He wants to earn as much profit as he can. So he has bought a chemical that increases the taste level of the <i>Modaks</i>. The tastier the <i>Modaks</i> the higher he can price them. This chemical is very costly hence he applies only certain amount of chemical on the <i>Modaks</i>(also he does not make it so costly that no one would buy it...:P). If Chef Diablo applies the chemical on the <i>Modak</i> having an initial of taste level TL, its taste level becomes TL^N where N is the number of drops of the chemical. Given TL and N, tell Chef Diablo the final Taste level of the <i>Modak</i>.
</p>
<h3>
Input:<br />
</h3>
<p>
First line contains t, the number of test cases. Then t lines follow, each line containing 2 space separated integers denoting TL and N respectively.
</p>
<h3>
Output:<br />
</h3>
<p>
It will consist of t lines having the final taste level of the <i>Modak</i> modulo 10^9+7.</p>
<p><h3>
Constraints:<br />
</h3>
</p><p>
1&lt;=t&lt;=100<br /><br />
1&lt;=TL&lt;=10^101<br /><br />
0&lt;=N&lt;=10^101
</p>
<h3>
Input:<br />
</h3>
<p>
3<br /><br />
1 1<br /><br />
2 2<br /><br />
123123123123 2
</p>
<h3>
Output:<br />
</h3>
<p>
1<br /><br />
4<br /><br />
293883007
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/aadesh_99">aadesh_99</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-02-2014</td>
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