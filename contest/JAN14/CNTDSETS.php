<?php require("../../includes/header.php"); ?><h1>Counting D-sets</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/mandarin/CNTDSETS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/russian/CNTDSETS.pdf">Russian</a>.</h3>
<p>Chef likes points located at integer coordinates in a space having <b>N</b> dimensions. In particular, he likes sets of such points having diameter <b>exactly equal to D</b> (called D-sets). The diameter of a set of points is the maximum distance between any pair of points in the set. The distance between two points <b>(a<sub>1</sub>,a<sub>2</sub>,...,a<sub>N</sub>)</b> and <b>(b<sub>1</sub>,b<sub>2</sub>,...,b<sub>N</sub>)</b> is <b>max{|a<sub>1</sub>-b<sub>1</sub>|, |a<sub>2</sub>-b<sub>2</sub>|, ..., |a<sub>N</sub>-b<sub>N</sub>|}</b>.
</p>
<p>
Chef would like to know how many D-sets exist. However, he soon realized that, without any extra constraints, there is an infinite number of D-sets. Thus, he would only like to count the number of classes of D-sets, such that any two D-sets which belong to the same class are equivalent under translation. To be more precise, two D-sets <b>X</b> and <b>Y</b> are considered equivalent (and belong to the same class) if:
<ul>
<li>they contain the same number of points <b>AND</b>
</li><li>there exists a tuple of <b>N</b> integer numbers <b>(t<sub>1</sub>, ..., t<sub>N</sub>)</b> such that by translating each point of <b>X</b> by the amount <b>t<sub>i</sub></b> in dimension <b>i</b> (<b>1≤i≤N</b>) we obtain the set of points <b>Y</b>.</li>
</ul>
</p>
<p>
Let's consider <b>N=2</b>, <b>D=4</b> and the following sets of points <b>X={(1,2), (5,5), (4,3)}</b> and <b>Y={(2,5), (5,6), (6,8)}</b>. Let's consider now the tuple <b>(1,3)</b>. By translating each point of <b>X</b> by the amounts specified by this tuple we obtain the set <b>{(2,5), (6,8), (5,6)}</b>, which is exactly the set <b>Y</b>. Thus, the two sets <b>X</b> and <b>Y</b> are equivalent and belong to the same class.
</p>
<p>
Help Chef find the number of classes of D-sets <b>modulo 1000000007</b> (<b>10<sup>9</sup>+7</b>).
</p>
<h3>Input</h3>
<p>The first line of input contains the number of test cases <b>T</b>. Each of the next <b>T</b> lines contains two space-separated integers describing a test case: <b>N</b> and <b>D</b>.</p>
<h3>Output</h3>
<p>For each test case (in the order given in the input), output the number of classes of D-sets <b>modulo 1000000007</b>.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>D</b> ≤ <b>1000000000</b>  (<b>10<sup>9</sup></b>)</li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
5
1 10
2 1
2 10
3 1
3 3
</pre><p> </p>
<pre>
<b>Output:</b>
512
9
498134775
217
548890725
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1:</b><br />
When <b>N=1</b> all the points are arranged in a line. In order to have a diameter equal to <b>10</b> each D-set must contain two points at distance <b>10</b>. Between two such points there may be up to <b>9</b> points which may belong to the D-set or not. Thus, there are <b>2<sup>9</sup>=512</b> classes of D-sets.
</p>
<p><b>Example case 2:</b><br />
There are <b>9</b> classes of D-sets. One D-set from each class is given below:
<ul>
<li>{(0,0), (0,1)}</li>
<li>{(0,0), (1,0)}</li>
<li>{(0,0), (1,1)}</li>
<li>{(0,1), (1,0)}</li>
<li>{(0,0), (0,1), (1,0)}</li>
<li>{(0,0), (0,1), (1,1)}</li>
<li>{(0,0), (1,0), (1,1)}</li>
<li>{(0,1), (1,0), (1,1)}</li>
<li>{(0,0), (0,1), (1,0), (1,1)}</li>
</ul>
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/mugurelionut">mugurelionut</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-08-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.3 sec</td>
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