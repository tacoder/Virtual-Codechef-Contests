<?php require("../../includes/header.php"); ?><h1>The New Scheme</h1><div class="content">

<p style="text-align:justify">
Scheme? - Too loudly said. Just a new idea. Now Chef is expanding his business. He wants to make some new restaurants in the big city of Lviv. To make his business competitive he should interest customers. Now he knows how. But don't tell anyone -  it is a secret plan. Chef knows four national Ukrainian dishes - <b>salo</b>, <b>borsch</b>, <b>varenyky</b> and <b>galushky</b>. It is too few, of course, but enough for the beginning. Every day in his restaurant will be a dish of the day among these four ones. And dishes of the consecutive days must be different. To make the scheme more refined the dish of the first day and the dish of the last day must be different too. Now he wants his assistant to make schedule for some period. Chef suspects that there is more than one possible schedule. Hence he wants his assistant to prepare all possible plans so that he can choose the best one among them. He asks you for help. At first tell him how many such schedules exist. Since the answer can be large output it modulo <b>10<sup>9</sup> + 7</b>, that is, you need to output the remainder of division of the actual answer by <b>10<sup>9</sup> + 7</b>.
</p>
<h3>Input</h3>
<p style="text-align:justify">
The first line of the input contains an integer <b>T</b>, the number of test cases. Each of the following <b>T</b> lines contains a single integer <b>N</b> denoting the number of days for which the schedule should be made.
</p>
<h3>Output</h3>
<p>
For each test case output a single integer in a separate line, the answer for the corresponding test case.</p>
<h3>Constraints</h3>
<p><b>1</b> &le; <b>T</b> &le; <b>100</b><br />
<b>2</b> &le; <b>N</b> &le; <b>10<sup>9</sup></b></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
2
3
5

<b>Output:</b>
12
24
240
</pre><h3>Explanation</h3>
<p style="text-align:justify">
<b>Case 1.</b> For <b>N = 2</b> days we have the following <b>12</b> schedules:</p>
<table border = 1 width = 100%>
<tr>
<td align=center width = 50%>First day</td>
<td align=center>Second day</td>
</tr>
<tr>
<td> salo </td>
<td> borsch </td>
</tr>
<tr>
<td> salo </td>
<td> varenyky </td>
</tr>
<tr>
<td> salo </td>
<td> galushky </td>
</tr>
<tr>
<td> borsch </td>
<td> salo </td>
</tr>
<tr>
<td> borsch </td>
<td> varenyky </td>
</tr>
<tr>
<td> borsch </td>
<td> galushky </td>
</tr>
<tr>
<td> varenyky </td>
<td> salo </td>
</tr>
<tr>
<td> varenyky </td>
<td> borsch </td>
</tr>
<tr>
<td> varenyky </td>
<td> galushky </td>
</tr>
<tr>
<td> galushky </td>
<td> salo </td>
</tr>
<tr>
<td> galushky </td>
<td> borsch </td>
</tr>
<tr>
<td> galushky </td>
<td> varenyky </td>
</tr>
</table>
<p style="text-align:justify">
<b>Case 2.</b> For <b>N = 3</b> we have the following <b>24</b> schedules:</p>
<table border = 1 width = 100%>
<tr>
<td align=center width = 33.33%>First day</td>
<td align=center width = 33.33%>Second day</td>
<td align=center width = 33.33%>Third day</td>
</tr>
<tr>
<td> salo </td>
<td> borsch </td>
<td> varenyky </td>
</tr>
<tr>
<td> salo </td>
<td> borsch </td>
<td> galushky </td>
</tr>
<tr>
<td> salo </td>
<td> varenyky </td>
<td> borsch </td>
</tr>
<tr>
<td> salo </td>
<td> varenyky </td>
<td> galushky </td>
</tr>
<tr>
<td> salo </td>
<td> galushky </td>
<td> borsch </td>
</tr>
<tr>
<td> salo </td>
<td> galushky </td>
<td> varenyky </td>
</tr>
<tr>
<td> borsch </td>
<td> salo </td>
<td> varenyky </td>
</tr>
<tr>
<td> borsch </td>
<td> salo </td>
<td> galushky </td>
</tr>
<tr>
<td> borsch </td>
<td> varenyky </td>
<td> salo </td>
</tr>
<tr>
<td> borsch </td>
<td> varenyky </td>
<td> galushky </td>
</tr>
<tr>
<td> borsch </td>
<td> galushky </td>
<td> salo </td>
</tr>
<tr>
<td> borsch </td>
<td> galushky </td>
<td> varenyky </td>
</tr>
<tr>
<td> varenyky </td>
<td> salo </td>
<td> borsch </td>
</tr>
<tr>
<td> varenyky </td>
<td> salo </td>
<td> galushky </td>
</tr>
<tr>
<td> varenyky </td>
<td> borsch </td>
<td> salo </td>
</tr>
<tr>
<td> varenyky </td>
<td> borsch </td>
<td> galushky </td>
</tr>
<tr>
<td> varenyky </td>
<td> galushky </td>
<td> salo </td>
</tr>
<tr>
<td> varenyky </td>
<td> galushky </td>
<td> borsch </td>
</tr>
<tr>
<td> galushky </td>
<td> salo </td>
<td> borsch </td>
</tr>
<tr>
<td> galushky </td>
<td> salo </td>
<td> varenyky </td>
</tr>
<tr>
<td> galushky </td>
<td> borsch </td>
<td> salo </td>
</tr>
<tr>
<td> galushky </td>
<td> borsch </td>
<td> varenyky </td>
</tr>
<tr>
<td> galushky </td>
<td> varenyky </td>
<td> salo </td>
</tr>
<tr>
<td> galushky </td>
<td> varenyky </td>
<td> borsch </td>
</tr>
</table>

<p style="text-align:justify">
<b>Case 3.</b> Don't be afraid. This time we will not provide you with a table of 240 schedules. The only thing we want to mention here is that apart from the previous two cases schedules for other values of <b>N</b> can have equal dishes (and even must have for <b>N > 4</b>). For example the schedule <b>(salo, borsch, salo, borsch)</b> is a correct schedule for <b>N = 4</b> while the schedule <b>(varenyky, salo, galushky, verynky, salo)</b> is a correct schedule for <b>N = 5</b>.
</p>
    </div><table border = 1 width = 100%>
<tr>
<td align=center width = 50%>First day</td>
<td align=center>Second day</td>
</tr>
<tr>
<td> salo </td>
<td> borsch </td>
</tr>
<tr>
<td> salo </td>
<td> varenyky </td>
</tr>
<tr>
<td> salo </td>
<td> galushky </td>
</tr>
<tr>
<td> borsch </td>
<td> salo </td>
</tr>
<tr>
<td> borsch </td>
<td> varenyky </td>
</tr>
<tr>
<td> borsch </td>
<td> galushky </td>
</tr>
<tr>
<td> varenyky </td>
<td> salo </td>
</tr>
<tr>
<td> varenyky </td>
<td> borsch </td>
</tr>
<tr>
<td> varenyky </td>
<td> galushky </td>
</tr>
<tr>
<td> galushky </td>
<td> salo </td>
</tr>
<tr>
<td> galushky </td>
<td> borsch </td>
</tr>
<tr>
<td> galushky </td>
<td> varenyky </td>
</tr>
</table><table border = 1 width = 100%>
<tr>
<td align=center width = 33.33%>First day</td>
<td align=center width = 33.33%>Second day</td>
<td align=center width = 33.33%>Third day</td>
</tr>
<tr>
<td> salo </td>
<td> borsch </td>
<td> varenyky </td>
</tr>
<tr>
<td> salo </td>
<td> borsch </td>
<td> galushky </td>
</tr>
<tr>
<td> salo </td>
<td> varenyky </td>
<td> borsch </td>
</tr>
<tr>
<td> salo </td>
<td> varenyky </td>
<td> galushky </td>
</tr>
<tr>
<td> salo </td>
<td> galushky </td>
<td> borsch </td>
</tr>
<tr>
<td> salo </td>
<td> galushky </td>
<td> varenyky </td>
</tr>
<tr>
<td> borsch </td>
<td> salo </td>
<td> varenyky </td>
</tr>
<tr>
<td> borsch </td>
<td> salo </td>
<td> galushky </td>
</tr>
<tr>
<td> borsch </td>
<td> varenyky </td>
<td> salo </td>
</tr>
<tr>
<td> borsch </td>
<td> varenyky </td>
<td> galushky </td>
</tr>
<tr>
<td> borsch </td>
<td> galushky </td>
<td> salo </td>
</tr>
<tr>
<td> borsch </td>
<td> galushky </td>
<td> varenyky </td>
</tr>
<tr>
<td> varenyky </td>
<td> salo </td>
<td> borsch </td>
</tr>
<tr>
<td> varenyky </td>
<td> salo </td>
<td> galushky </td>
</tr>
<tr>
<td> varenyky </td>
<td> borsch </td>
<td> salo </td>
</tr>
<tr>
<td> varenyky </td>
<td> borsch </td>
<td> galushky </td>
</tr>
<tr>
<td> varenyky </td>
<td> galushky </td>
<td> salo </td>
</tr>
<tr>
<td> varenyky </td>
<td> galushky </td>
<td> borsch </td>
</tr>
<tr>
<td> galushky </td>
<td> salo </td>
<td> borsch </td>
</tr>
<tr>
<td> galushky </td>
<td> salo </td>
<td> varenyky </td>
</tr>
<tr>
<td> galushky </td>
<td> borsch </td>
<td> salo </td>
</tr>
<tr>
<td> galushky </td>
<td> borsch </td>
<td> varenyky </td>
</tr>
<tr>
<td> galushky </td>
<td> varenyky </td>
<td> salo </td>
</tr>
<tr>
<td> galushky </td>
<td> varenyky </td>
<td> borsch </td>
</tr>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witalij_hq ">witalij_hq </a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-08-2012</td>
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