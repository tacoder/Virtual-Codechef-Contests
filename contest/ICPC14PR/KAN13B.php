<?php require("../../includes/header.php"); ?><h1>Walking Path</h1><div class="content">
<p>John lives in a hilly city. He wants to go from point <b>A</b> to point <b>B</b> and he is planning to walk today. Fortunately for him, the city is designed like a grid. Unfortunately, as the elevation of each point is different, finding the easiest path is not trivial. That’s why John needs your help.
</p>
<p>John wants to find a path from <b>A</b> to <b>B</b> with minimum hardness. Hardness of going from point <b>A</b> with height <b>h_1</b> to adjacent point <b>B</b> with height <b>h_2</b> is
</p>
<ul>
<li> if <b>h_1</b> &gt; <b>h_2</b>, then 0.5 + 0.5 * sqrt(1 + (<b>h_1</b> - <b>h_2</b> )^2)</li>
<li> otherwise, -0.5 + 1.5 * sqrt(1 + (<b>h_1</b> - <b>h_2</b> )^2)</li>
</ul>
<p>
Distance between adjacent points is considered one unit. Slope of road segments between adjacent points is never more than 0.5.
</p>
<h3>Input</h3>
<p>The input file starts with a number <b>T</b> that represents the number of test cases. Then <b>T</b> test cases follow. Each test case starts with two number <b>r</b>, <b>c</b>, representing the size of the grid. Next <b>r</b> lines contain <b>c</b> numbers. <b>j</b>-th number from <b>i</b>-th line corresponds to the height of the intersection of <b>i</b>-th street with <b>j</b>-th avenue.
</p>
<p>
Next line contains an integer <b>q</b>, then <b>q</b> lines follow. Each of the following lines represents a query. A query contains four numbers: <b>i_s</b>, <b>j_s</b>, <b>i_e</b>, and <b>j_e</b>. This represents a request to find the path with minimum hardness from intersection between <b>i_s</b>-th street and <b>j_s</b>-th avenue to the intersection between <b>i_e</b>-th street and <b>j_e</b>-th avenue.
</p>
<h3>Output</h3>
<p>
Start each test case with case number as shown in sample output (e.g. “Case 1:” for the first case, quotes for clarification). Then output <b>q</b> lines, each for one query. For each query, output a line containing the hardness of optimal path with 6 digits after decimal point.
</p>
<p>
See sample input and output in the next page for details.
</p>
<h3>Constraints</h3>
<p>1 &lt;= <b>T</b> &lt;= 10</p>
<p>5 &lt;= <b>r</b>, <b>c</b> &lt;= 100</p>
<p>1 &lt;= <b>q</b> &lt;= 100</p>
<p>1 &lt;= <b>i_s</b>, <b>i_e</b> &lt;= r</p>
<p>1 &lt;= <b>j_s</b>, <b>j_e</b> &lt;= c</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
6 5
0.0 0.1 0.2 0.3 0.4
0.1 0.0 0.3 0.3 0.5
0.2 0.2 0.2 0.2 0.2
0.3 0.4 0.5 0.5 0.3
0.3 0.5 0.5 0.5 0.6
0.6 0.4 0.4 0.2 0.2 
5
1 1 4 4
1 1 6 5
1 1 1 5
3 1 1 3
6 5 2 3
6 5
0.0 0.1 0.2 0.3 0.4
0.1 0.0 0.3 0.3 0.5
0.2 0.2 0.2 0.2 0.2
0.3 0.4 0.5 0.5 0.3
0.3 0.5 0.5 0.5 0.6
0.6 0.4 0.4 0.2 0.2 
3
1 5 6 1
6 1 1 1
6 3 2 5


<b>Output:</b>
Case 1:
6.037407
9.049802
4.029925
4.009975
6.066684
Case 2:
9.074374
5.029497
6.066684

</pre>
<p><b>
<p>Problem Setter : Tanaeem Moosa</p>
<p></p></b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-12-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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