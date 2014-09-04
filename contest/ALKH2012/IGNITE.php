<?php require("../../includes/header.php"); ?><h1>Ignited Flower</h1><div class="content">

<p style="align:justify">Mario, Luigi and the Yoshis have one last opportunity to practice their spells before they meet Fawful in battle - and save princess Peach yet again.</p>
<p style="align:justify">Mario and Luigi know that the longer the battle continues, danger on Peach's life increases. They have hence chosen to hone their skills for the Ignited Flower attack.</p>
<p style="align:justify">Ignited Flower is conjured forward as follows.</p>
<ol>
<li>
<p style="align:justify">N Yoshis stand in a circle around the target, labeled 1 to N. The Green Yoshi is always labeled 1.</p>
</li>
<li>
<p style="align:justify">There are K attack plans.</p>
</li>
<li>
<p style="align:justify">Each attack plan is a connected Graph. Each vertex in the attack plan represents some Yoshi. Each edge in the attack plan represents a line drawn between the pair of Yoshis. Edges (or lines) are not directed. An attack plan will have at most one line between any pair of Yoshis.</p>
</li>
<li>
<p style="align:justify">Mario and Luigi choose a set of attack plans (at least 1). Hence the lines from each of the chosen attack plans are drawn. There may be several lines between the same pair of Yoshis (from different attack plans), and each such line is considered uniquely in the attack process below.</p>
</li>
<li>
<p style="align:justify">The Green Yoshi takes out an egg and kicks it along one of the lines that start at his position. The next Yoshi who receives the egg, kicks it along a separate line that starts at his position. If the Yoshis are able to kick the egg along each of the lines (in the chosen attack plans) exactly once, then a mighty Ignited Flower falls on Fawful causing immense damage. Note that it may be (but it is not necessary) that the egg will return to the Green Yoshi after passing through all the lines exactly once.</p>
</li>
</ol>
<p style="align:justify">The Yoshis are smart. If they can kick the egg to pass it on every line in all the chosen attack plans exactly once, they will do what it takes.</p>
<p style="align:justify">Mario and Luigi are not smart. They need your help to decide which attack plans they should choose, such that, when all the lines in the chosen attack plans are drawn among the Yoshis, the Yoshis are able to pass the egg along each of the lines exactly once. If there are k lines between two Yoshis after choosing the attack plans, then the egg must be passed between the two Yoshis exactly k times in the attack process (see explanation of sample input for clarity).</p>
<h3>Input</h3>
<p style="align:justify">The first line of input contains a number T (1 &le; T &le; 200), the number of test cases. T test cases follow. The first line of each test case contains the numbers N and K (2 &le; N, K &le; 30). The next K lines contain description of the attack plans, one on each line. An attack plan description contains N positive integers between 1 and 1,073,741,823. Consider the N bit binary representation of the integers as the row major order of the N x N adjacency matrix of the (undirected) graph for the attack plan. (see explanation of sample input for clarity) You may assume that the graph for the input plan is connected, and has no self loops.</p>
<h3>Output</h3>
<p style="align:justify">Output 1 line for each case consisting of either "YES" or "NO" (quotes for clarity). Print "YES" if Mario and Luigi can choose some of the attack plans such that it is possible for the Yoshis to manage a successful attack; "NO" otherwise.</p>
<h3>Sample Input</h3>
<pre>
2
4 3
1 1 1 14
2 3 12 4
4 11 4 4
4 3
6 10 13 2
4 11 5 6
6 9 9 6
</pre><h3>Sample Output</h3>
<pre>
YES
YES
</pre><h3>Explanation</h3>
<p style="align:justify">In the first sample case the adjacency matrix for the three attack plans look like</p>
<pre>
Plan 1:
0 0 0 1
0 0 0 1
0 0 0 1
1 1 1 0

Plan 2:
0 0 1 0
0 0 1 1
1 1 0 0
0 1 0 0

Plan 3:
0 1 0 0
1 0 1 1
0 1 0 0
0 1 0 0
</pre><p style="align:justify">By selecting plan 1 and plan 3, the Yoshis will be able to touch all the 6 lines in the resulting graph as follows (in one of several ways, of course)</p>
<pre>
(1, 2) (2, 4) (4, 2) (2, 3) (3, 4) (4, 1)
</pre><p style="align:justify">In the second sample input, Mario can select Plan 3. Other option is to select Plan 2 and Plan 3. Selecting Plan 1 and Plan 2 will not let the Yoshis attack successfully though.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gamabunta">gamabunta</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-09-2012</td>
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