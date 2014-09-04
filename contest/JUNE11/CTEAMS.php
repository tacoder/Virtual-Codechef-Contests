<?php require("../../includes/header.php"); ?><h1>Chef Teams</h1><div class="content">

<p>The executive chef is trying to bring some competitive spirit into his kitchen. He wants to split the chefs into two teams based on their age - he'll form the young and the old team. To make it fair, he will split them evenly or give the young team one person advantage when there is an odd number of chefs. Ages of all employees are unique. The executive chef also rated all chefs according to their cooking skills. Rating of a team is equal to the sum of ratings of its members. The chefs have developed a habit of coming to work late. The executive chef wants to keep the teams as fair as possible at all times and is therefore forced to change the teams each time one of the chefs comes to work in the morning. He needs your help with this task.</p>
<h3>Input</h3>
<p>The first line contains the number of chefs N. The following N lines describe the chefs in order as they come to work. Each chef is described by two integers, his or her age A<sub>i</sub> and rating R<sub>i</sub>.</p>
<h3>Output</h3>
<p>Every time a new chef joins the kitchen, output the absolute difference between team ratings.</p>
<h3>Constraints</h3>
<ul>
<li>1 &lt;= N &lt;= 10^5</li>
<li>1 &lt;= A<sub>i</sub> &lt;= 10^9</li>
<li>1 &lt;= R<sub>i</sub> &lt;= 1000</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
2 3
1 7
5 5
3 1
8 15

<b>Output:</b>
3
4
5
4
9
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/thocevar">thocevar</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-04-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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