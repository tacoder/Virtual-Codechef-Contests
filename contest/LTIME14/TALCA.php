<?php require("../../includes/header.php"); ?><h1>Lowest Common Ancestor</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME14/mandarin/TALCA.pdf">Mandarin Chinese.</a></h3>
<p> </p>
<p>In a rooted tree, the <a href="http://en.wikipedia.org/wiki/Lowest_common_ancestor">lowest common ancestor</a> (or LCA for short) of two vertices <b>u</b> and <b>v</b> is defined as the lowest vertex that is ancestor of both that two vertices.</p>
<p>Given a tree of <b>N</b> vertices, you need to answer the question of the form "<b>r u v</b>" which means if the root of the tree is at <b>r</b> then what is LCA of <b>u</b> and <b>v</b>.</p>
<p> </p>
<h3>Input</h3>
<p>The first line contains a single integer <b>N</b>. Each line in the next <b>N - 1</b> lines contains a pair of integer <b>u</b> and <b>v</b> representing a edge between this two vertices.</p>
<p>The next line contains a single integer <b>Q</b> which is the number of the queries. Each line in the next <b>Q</b> lines contains three integers <b> r, u, v</b> representing a query.</p>
<p> </p>
<h3>Output</h3>
<p>For each query, write out the answer on a single line.</p>
<h3>Constraints</h3>
<p>20 points:</p>
<ul>
<li> 1 ≤ <b>N</b>, <b>Q</b> ≤ 100</li>
</ul>
<p> </p>
<p>40 points:</p>
<ul>
<li> 1 ≤ <b>N</b>, <b>Q</b> ≤ 10<sup>5</sup></li>
<li>There is less than 10 unique value of r in all queries</li>
</ul>
<p> </p>
<p>40 points:</p>
<ul>
<li> 1 ≤ <b>N</b>, <b>Q</b> ≤ 2 × 10<sup>5</sup></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
1 2
2 3
1 4
2
1 4 2
2 4 2

<b>Output:</b>
1
2
</pre><p> </p>
<h3>Explanation</h3>
<ul>
<li>"1 4 2": if 1 is the root, it is parent of both 2 and 4 so LCA of 2 and 4 is 1.</li>
<li>"2 4 2": the root of the tree is at 2, according to the definition, LCA of any vertex with 2 is 2.</li>
</ul>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tuananh93">tuananh93</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-07-2014</td>
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