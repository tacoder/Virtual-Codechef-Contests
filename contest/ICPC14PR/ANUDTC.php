<?php require("../../includes/header.php"); ?><h1>Divide the Cake</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK46/mandarin/ANUDTC.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK46/russian/ANUDTC.pdf">Russian</a> as well.</h3>
<h3>Problem description</h3>
<p>Chef loves circular cakes. He divides them into smaller pieces and sells them. You are to help him in this work.</p>
<p>Today Chef has cooked the brand new circular cake. To split the cake Chef can make several (possibly, zero) cuts. Each cut should be a straight line going from the center of the cake to its border. Also, the angle between any two cuts should have positive integer value (Chef measure all the angles in degrees). Chef consider two pieces of cake equal if the appropriate angles are equal.</p>
<p><img src="http://codechef.com/download/Sector_central_angle_arc.svg" height="160" /><br /></p>
<p>The picture contains two distinct pieces, and two cuts. Red part on the image shows one piece. The appropriate angle is <b>AOB</b>.</p>
<p>Chef gives to you an integer <b>N</b>, denoting the number of pieces Chef wants to make. You need to answer the following questions:</p>
<ul>
<li>Is it possible to make exactly <b>N</b> equal pieces from the whole cake?</li>
<li>Is it possible to make exactly <b>N</b> pieces from the whole cake?</li>
<li>Is it possible to make exactly <b>N</b> pieces from the whole cake, in such a way that no two of them are equal?</li>
</ul>
<p><br /></p>
<h3>Input</h3>
<p>First line contains a single integer <b>T</b> denoting the number of test cases. Each of the following <b>T</b> lines contain a single integer <b>N</b> denoting the number of pieces Chef wants to make.</p>
<h3>Output</h3>
<p>For each test case, output one line containing 3 space separated characters.<br />
Above, we defined the 3 questions that Chef will ask. Output <b>'y'</b> for yes or <b>'n'</b> for no (quotes for clarity) for each of those questions.<br />
Answers for 3 questions (in the order above) must be space separated on the same line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
4
7

<b>Output:</b>
y y y
n y y
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b><br /><br />
Is it possible to make <b>N</b> equal pieces?<br /><br />
Yes, you can cut 4 pieces each with 90 degrees angle.<br /><br />
Is it possible to make <b>N</b> pieces?<br /><br />
Yes, you can cut 4 pieces each with 90 degrees angle.<br /><br />
Is it possible to make <b>N</b> pieces, such that no two of them are equal?<br /><br />
Yes, you can cut 4 pieces with angles 88, 89, 91, 92.<br />
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anudeep2011">anudeep2011</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-04-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>