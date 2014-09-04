<?php require("../../includes/header.php"); ?><h1>Present for Andrii</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK48/mandarin2/RRDAG.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK48/russian/RRDAG.pdf">Russian</a> as well.</h3>
<p> </p>
<p>Andrii is a great programmer. He recently managed to enter Ukrainian IOI team. His parents wanted to appreciate him and present him a DAG(Directed Acyclic Graph). His favourite TV show is "Pimp My Ride" so he'd like to customize his graph. He'd like to add as many edges as possible in order to still have a DAG. Please, help Andrii, find the maximum number of edges he can add to his graph without obtaining any cycle. </p>
<p> </p>
<h3>Input</h3>
<p>The first line of an input contains single integer <b>N</b> — the number of vertices in the graph. Vertices are numerated from <b>1</b> to <b>N</b>. Next <b>N</b> lines contain <b>N</b> characters each — adjacency matrix of the graph. If there is '1' in <b>j<sup>th</sup></b> character of the <b>i<sup>th</sup></b> line then there is an edge from vertex <b>i</b> to vertex <b>j</b> in Andrii's graph. It's guaranteed that given graph does not contain cycles. </p>
<p> </p>
<h3>Output</h3>
<p>Output the maximal number of edges one can add to the graph in the first line. Then output the edges themselves. Edges should be written in separate lines, one by one. Edge is defined by a pair of integers <b>a</b> and <b>b</b> which means that edge from <b>a</b> to <b>b</b> should be added. <br />
The author is pretty lazy and he does not want to write checking program. So, if there are multiple solutions which lead to maximal number of edges that can be added, then you should output lexicographically smallest sequence of edges. A sequence of edges is smaller than another if the first edge that they differ in is lexicographically smaller. Edges are compared as pairs of integers, i.e. as sequence of two integers. </p>
<p> </p>
<h3>Constraints</h3>

<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1500</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
010
000
000

<b>Output:</b>
2
1 3
2 3
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Rubanenko">Rubanenko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shiplu">shiplu</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-07-2014</td>
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