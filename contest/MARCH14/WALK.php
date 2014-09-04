<?php require("../../includes/header.php"); ?><h1>Walk</h1><div class="content">
<h3>Read problems statements in <a href="/download/translated/MARCH14/mandarin/WALK.pdf" target="_blank">Mandarin Chinese </a> and <a href="/download/translated/MARCH14/russian/WALK.pdf" target="_blank">Russian</a>.</h3>
<p>Chef and his girlfriend are going to have a promenade. They are walking along the straight road which consists of segments placed one by one. Before walking Chef and his girlfriend stay at the beginning of the first segment, they want to achieve the end of the last segment.</p>
<p>There are few problems:</p>
<ul>
<li> At the beginning Chef should choose constant integer - the velocity of mooving. It can't be changed inside one segment. </li>
<li> The velocity should be decreased by at least 1 after achieving the end of some segment. </li>
<li> There is exactly one shop on each segment. Each shop has an attractiveness. If it's attractiveness is <b>W</b> and Chef and his girlfriend move with velocity <b>V</b> then if <b>V</b> &lt; <b>W</b> girlfriend will run away into the shop and the promenade will become ruined. </li>
</ul>
<p>Chef doesn't want to lose her girl in such a way, but he is an old one, so you should find the minimal possible velocity at the first segment to satisfy all conditions.</p>
<p> </p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the number of segments. The second line contains <b>N</b> space-separated integers <b>W<sub>1</sub></b>, <b>W<sub>2</sub></b>, ..., <b>W<sub>N</sub></b> denoting the attractiveness of shops. </li>
</ul>
<p> </p>
<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing the minimal possible velocity at the beginning.</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^5</b></li>
<li><b>1</b> ≤ <b>W<sub>i</sub></b> ≤ <b>10^6</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>

2
5
6 5 4 3 2
5
3 4 3 1 1

<b>Output:</b>

6
5
</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b></p>
<p>If we choose velocity 6, on the first step we have 6 &gt;= 6 everything is OK, then we should decrease the velocity to 5 and on the 2nd segment we'll receive 5 &gt;= 5, again OK, and so on.</p>
<p><b>Example case 2.</b></p>
<p>If we choose velocity 4, the promanade will be ruined on the 2nd step (we sould decrease our velocity, so the maximal possible will be 3 which is less than 4).</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/berezin">berezin</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/whiteking">whiteking</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-01-2014</td>
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