<?php require("../../includes/header.php"); ?><h1>Chef and Reversing</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/mandarin/REVERSE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/russian/REVERSE.pdf">Russian</a>.</h3>
<p>Sometimes mysteries happen. Chef found a directed graph with <b>N</b> vertices and <b>M</b> edges in his kitchen! </p>
<p>The evening was boring and chef has nothing else to do, so to entertain himself, Chef thought about a question "What is the minimum number of edges he needs to reverse in order to have at least one path from vertex <b>1</b> to vertex <b>N</b>, where the vertices are numbered from <b>1</b> to <b>N</b>.</p>
<h3>Input</h3>
<p>Each test file contains only one test case.</p>
<p>The first line of the input contains two space separated integers <b>N</b> and <b>M</b>, denoting the number of vertices and the number of edges in the graph respectively. The <b>i</b><sup>th</sup> line of the next <b>M</b> lines contains two space separated integers <b>X<sub>i</sub></b> and <b>Y<sub>i</sub></b>, denoting that the <b>i</b><sup>th</sup> edge connects vertices from <b>X<sub>i</sub></b> to <b>Y<sub>i</sub></b>.</p>
<h3>Output</h3>
<p>In a single line, print the minimum number of edges we need to revert. If there is no way of having at least one path from <b>1</b> to <b>N</b>, print <b>-1</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ N, M ≤ 100000 = 10<sup>5</sup></b></li>
<li><b>1 ≤ X<sub>i</sub>, Y<sub>i</sub> ≤ N</b></li>
<li>There can be multiple edges connecting the same pair of vertices, There can be self loops too i.e. <b> X<sub>i</sub> = Y<sub>i</sub></b> </li>
</ul>
<p><h3>Example</h3>
<pre><b>Input:</b>
7 7
1 2 
3 2
3 4
7 4
6 2
5 6
7 5

<b>Output:</b>
2
</pre></p>
<h3>Explanation</h3>
<p>We can consider two paths from <b>1</b> to <b>7</b>:</p>
<ul>
<li> <b>1-2-3-4-7</b> </li>
<li> <b>1-2-6-5-7</b> </li>
</ul>
<p>In the first one we need to revert edges <b>(3-2), (7-4)</b>. In the second one - <b>(6-2), (5-6), (7-5)</b>. So the answer is  <b>min(2, 3) = 2</b>.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/berezin">berezin</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-03-2014</td>
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