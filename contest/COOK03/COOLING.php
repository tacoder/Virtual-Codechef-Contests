<?php require("../../includes/header.php"); ?><h1>Cooling Pies</h1><div class="content">

<p>The chef has just finished baking several pies, and it's time to place them on cooling racks.<br />
The chef has exactly as many cooling racks as pies.  Each cooling rack can only hold one pie, and each pie may only be held by one cooling rack,<br />
but the chef isn't confident that the cooling racks can support the weight of the pies.<br />
The chef knows the weight of each pie,<br />
and has assigned each cooling rack a maximum weight limit.<br />
What is the maximum number of pies the chef can cool on the racks?</p>
<h3>Input:</h3>
<p>Input begins with an integer T≤30, the number of test cases.<br />
Each test case consists of 3 lines.<br />
The first line of each test case contains a positive integer N≤30,<br />
the number of pies (and also the number of racks).<br />
The second and third lines each contain exactly positive N integers not exceeding 100.<br />
The integers on the second line are the weights of the pies, and the integers on the third line<br />
are the weight limits of the cooling racks.</p>
<h3>Output:</h3>
<p>For each test case, output on a line the maximum number of pies the chef can place on the racks.</p>
<h3>Sample input:</h3>
<pre>2
3
10 30 20
30 10 20
5
9 7 16 4 8
8 3 14 10 10
 </pre><h3>Sample output:</h3>
<pre>3
4
 </pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/maksflow">maksflow</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-09-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>