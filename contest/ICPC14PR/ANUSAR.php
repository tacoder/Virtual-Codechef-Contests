<?php require("../../includes/header.php"); ?><h1>Substrings and Repetitions</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK46/mandarin/ANUSAR.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK46/russian/ANUSAR.pdf">Russian</a> as well.</h3>
<p><h3>Statement</h3>
</p><p>Given a string <b>S</b> and several frequencies <b>F<sub>i</sub></b>. For each <b>F<sub>i</sub></b> output the number of substrings of <b>S</b> (the characters of substring should be contiguous) that occur at least <b>F<sub>i</sub></b> times in <b>S</b>. Note, that we consider two substrings distinct if they have distinct length, or they have distinct starting indices.</p>
<h3>Input</h3>
<p>The first line of input contains integer <b>T</b>, the number of test cases.</p>
<p>The first line of each test case contains string <b>S</b> (it contains only lowercase Latin letters). The second line of each test case contains an integer <b>Q</b>, that is the number of queries to be answered. Then <b>Q</b> lines follows containing <b>F<sub>i</sub></b> each.</p>
<h3>Output</h3>
<p>For each query, output the required answer.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>200000</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>200000</b></li>
<li><b>1</b> ≤ <b>F<sub>i</sub></b> ≤ <b>200000</b></li>
<li><b>Sum of |S| over all test cases ≤ 200000</b></li>
<li><b>Sum of Q over all test cases ≤ 200000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
aaeddf
4
1
2
3
4

<b>Output:</b>
21
4
0
0
</pre><p> </p>
<h3>Explanation</h3>
<p>There are a total of 6*(6+1)/2 substrings, all of them occur at least once. So for <b>F<sub>1</sub>=1</b> answer is equal to 21. Note that substring <b>"a"</b> is repeated 2 times in <b>S</b>, both the instances are added to the answer.</p>
<p>Look at <b>F<sub>2</sub>=2</b>. Substring <b>"a"</b> and substring <b>"d"</b> occurs 2 times each in <b>S</b>. The answer for <b>F<sub>2</sub></b> is 4, that is all the occurrences of <b>"a"</b> and <b>"d"</b>.</p>
<p>There are no substrings which repeat more than twice. So rest answers are 0</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anudeep2011">anudeep2011</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-03-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>