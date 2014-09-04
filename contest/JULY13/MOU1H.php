<?php require("../../includes/header.php"); ?><h1>Mountain Holidays</h1><div class="content">
<p>Some time ago, Chef discovered that more and more people have started climbing mountains every day.<br /> So he decided to build restaurant in the Ukrainian resort Bukovel (Carpathian Mountains). But there are many places to choose, so he wants to choose the best one. Let us learn how attractiveness for a location is calculated.</p>
<p>Some time ago, Chef discovered that more and more people have started climbing mountains every day.<br /> So he decided to build restaurant in the Ukrainian resort Bukovel (Carpathian Mountains). But there are many places to choose, so he wants to choose the best one. Let us learn how attractiveness for a location is calculated.</p>
<p>Next to every place, is some mountain. A Mountain is a sequence of points <b>(0,height<sub>0</sub>), (1,height<sub>1</sub>), ... (n-1,height<sub>n-1</sub>)</b>, where every two adjacent points are connected with a segment. For example, consider the mountain</p>
<p> </p>
<pre>(0,0), (1,2), (2,1), (3,2), (4,1), (5,3), (6,0), (7,1), (8,0)

       /\
  /\/\/  \
 /        \/\

</pre>
<p>Visitors may start their climbing from some position <b>i</b> and finish in position <b>j</b>, where <b>(i &lt; j)</b>.They calculate the attractiveness of a mountain, as the number of different climbs that it offers. Of course, so does our Chef!</p>
<p>A climb from position <b>i</b> to position <b>j</b> is the sequence <b>(i,height<sub>i</sub>), ... (j,height<sub>j</sub>)</b>.Two climbs, say <b>i<sub>1</sub></b> to <b>j<sub>1</sub></b> and <b>i<sub>2</sub></b> to <b>j<sub>2</sub>,</b> are different if and only if</p>
<p><b>(j<sub>1</sub> – i<sub>1</sub> != j<sub>2</sub> – i<sub>2</sub>)</b> or<br /> <b>height<sub>i<sub>1</sub>+k</sub> – height<sub>i<sub>1</sub>+k-1</sub> != height<sub>i<sub>2</sub>+k</sub> – height<sub>i<sub>2</sub>+k–1</sub></b> for at least some <b>k</b> in the range <b>(1, 2, ... j<sub>1</sub>-i<sub>1</sub>)</b>.</p>
<p>Let us consider two climbs from the mountain we considered above</p>
<pre>
  /\/
 /

and

  /\
 /  \
     \

</pre>
<p>The first one is the climb from <b>(0 to 3)</b>, and the second one is the climb from <b>(4 to 6)</b>. They are different because <b>(3 - 0 != 6 - 4)</b>. On the other hand, climbs such as <b>(0 to 1)</b> and <b>(4 to 5)</b> are the same.</p>
<p>Given the array, <b>heights</b>, find the number of different climbs that exist on the mountain which is described by the sequence of these heights. Because answer can be very large, output it modulo <b>1,000,000,009</b>.</p>
<h3>Input</h3>
<p>First line of input contains <b>T</b>, the number of test cases. The first line of each test case contains <b>N</b>, the number of peaks. On second line of each test case, there are <b>N</b> numbers. The <b>i<sup>th</sup></b> number denotes the height of <b>i<sup>th</sup></b> peak.</p>
<h3>Output</h3>
<p>For each test case, output a single number, the <b>number of unique climbs</b>.</p>
<h3>Constraints</h3>
<p><b>1 ≤ T ≤ 1000</b><br /> <b>1 ≤ N ≤ 100000</b><br /> <b>Sum of N over all test cases in a file ≤ 100000</b><br /> <b>|Height<sub>i</sub>| ≤ 1000000</b><br /> <b>|Height<sub>i</sub> – Height<sub>i-1</sub>| ≤ 100</b> (Tourists won’t climb very steep cliffs)</p>
<h3>Sample</h3>
<pre><b>Input</b>
3
6
1 2 3 4 5 6
9
0 2 1 2 1 3 0 1 0
7
0 5 -5 5 -5 4 -4

<b>Output</b>
5
31
20

</pre>
<h3>Explanation</h3>
<p>The second test case is taken from the problem statement.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witalij_hq ">witalij_hq </a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-03-2013</td>
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