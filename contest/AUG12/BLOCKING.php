<?php require("../../includes/header.php"); ?><h1>Block Game</h1><div class="content">

<p>In the magic land, there is a smart but naughty boy Crane.</p>
<p>Crane has <strong>n</strong> houses, and <strong>n</strong> friends (both numbered from 1 to <strong>n</strong>).<br />
Crane's mother has scheduled a plan for all his friends<br />
such that each friend visits each house of Crane <strong>exactly once</strong><br />
at a different time, i.e.,<br />
there is at most one friend in any house at any time.</p>
<p>But like Crane all his friends are also naughty.<br />
Therefore his mother wants to lock away each of his friends in distinct houses.<br />
What she'll do is to choose a distinct house for each friend. As that friend visits<br />
that house, he'll be locked in that house.  That is, Crane's mother wants to find a<br />
sequence <strong>block</strong> such that<br />
the <strong>i-th</strong> friend will be locked in <strong>block[i]-th</strong> house<br />
once he visits that house. As she wants to ensure that there is at maximum one<br />
person in each house, she must choose the sequence <strong>block</strong> such<br />
that if friend A visits house H at time T, and he is locked away in the house, then no other friends visit house H<br />
after time T. </p>
<p>Help Crane's mother to find such a sequence <strong>block</strong>. </p>
<h3>Input</h3>
<p>First line contains a single integer <strong>n</strong> (1 ≤ <strong>n</strong><br />
≤ 100), indicating the number of friends and houses.</p>
<p>Then <strong>n</strong> lines follow, with each line containing <strong>n</strong> positive integers.<br />
The <strong>j-th</strong> integer in <strong>i-th</strong> line indicates the time when the <strong>i-th</strong> friend will visit the <strong>j-th</strong> house. All times will fit in signed 32-bit integer.</p>
<h3>Output</h3>
<p>If there exists a sequence <strong>block</strong> that satisfies the constraints, then output <strong>block[1] block[2] ... block[n]</strong> in one line, separated by a single space.</p>
<p>Otherwise if there is no such sequence, output <strong>-1</strong> in one line.<br />
If there are multiple answers, then anyone will do.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
1 2 3
4 5 6
7 8 9

<b>Output:</b>
3 2 1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-06-2012</td>
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