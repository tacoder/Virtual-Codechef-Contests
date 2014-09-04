<?php require("../../includes/header.php"); ?><h1>Tree</h1><div class="content">
<p>You are given a tree that is built in a following way: initially there is single vertex <b>1</b>. All the other vertices are added one by one, from vertex <b>2</b> to vertex <b>N</b>, by connecting it to one of those that have been added before. You are to find the <i>diameter</i> of the tree after adding each vertex. Let the distance between vertex <b>u</b> and <b>v</b> be the minimal number of edges you have to pass to get from <b>u</b> to <b>v</b>, then <i>diameter</i> is the maximum distance between any two pairs <b>(u,v)</b> that have already been added to the tree.</p>
<h3>Input</h3>
<p>The input consists of several Test cases. The file line of input contains an integer <b>T</b>, the number of test cases. <b>T</b> test cases follow.<br /> The first line of each test case contains an integer <b>N</b>, then <b>N-1</b> lines follow: <b>ith</b> line contains an integer <b>P<sub>i</sub></b>, which means that vertex <b>i+1</b> is connected to the vertex <b>P<sub>i</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, output <b>N-1</b> lines - the diameter after adding vertices <b>2, 3,..,N</b></p>
<p> </p>
<h3>Constraints</h3>
<ul>
<b> </b>
</ul>
<p> </p>
<li> 1 ≤ T ≤ 15 </li>
<li> 1 ≤ N ≤ 10<sup>5</sup> </li>
<li> P<sub>i</sub> ≤ i </li>
<li> Sum of <b>N</b> over all test cases in a file does not exceed <b>2 * 10<sup>5</sup></b>
<h3>Example</h3>
<pre><b>Input:</b>
2
3
1
1
5
1
2
3
3

<b>Output:</b>
1
2
1
2
3
3
</pre>
</li>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Rubanenko">Rubanenko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/utkarsh_lath">utkarsh_lath</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-09-2013</td>
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