<?php require("../../includes/header.php"); ?><h1>Ciel and Tomya</h1><div class="content">

<p>
Tomya is a girl. She loves Chef Ciel very much.
</p>
<p>
Today, too, Tomya is going to Ciel's restaurant.<br />
Of course, Tomya would like to go to Ciel's restaurant as soon as possible.<br />
Therefore Tomya uses one of the shortest paths from Tomya's house to Ciel's restaurant.<br />
On the other hand, Tomya is boring now to use the same path many times.<br />
So Tomya wants to know the number of shortest paths from Tomya's house to Ciel's restaurant.<br />
Your task is to calculate the number under the following assumptions.
</p>
<p>
This town has <b>N</b> intersections and <b>M</b> two way roads.<br />
The <b>i</b>-th road connects from the <b>A<sub>i</sub></b>-th intersection to the <b>B<sub>i</sub></b>-th intersection, and its length is </p>
<p><b>C<sub>i</sub></b>.<br />
Tomya's house is in the 1st intersection, and Ciel's restaurant is in the <b>N</b>-th intersection.
</p>
<h3>Input</h3>
<p>
The first line contains an integer <strong>T</strong>, the number of test cases.<br />
Then <strong>T</strong> test cases follow.<br />
The first line of each test case contains 2 integers <b>N</b>, <b>M</b>.<br />
Then next <b>M</b> lines contains 3 integers denoting <b>A<sub>i</sub></b>, <b>B<sub>i</sub></b> and <b>C<sub>i</sub></b>.
</p>
<h3>Output</h3>
<p>
For each test case, print the number of shortest paths from Tomya's house to Ciel's restaurant.
</p>
<h3>Constraints</h3>
<p>
1 ≤ <b>T</b> ≤ 10<br />
2 ≤ <b>N</b> ≤ 10<br />
1 ≤ <b>M</b> ≤ <b>N ∙ (N – 1) / 2</b><br />
1 ≤ <b>A<sub>i</sub></b>, <b>B<sub>i</sub></b> ≤ <b>N</b><br />
1 ≤ <b>C<sub>i</sub></b> ≤ 10<br />
<b>A<sub>i</sub></b> ≠ <b>B<sub>i</sub></b><br />
If <b>i</b> ≠ <b>j</b> and <b>A<sub>i</sub></b> = <b>A<sub>j</sub></b>, then <b>B<sub>i</sub></b> ≠ <b>B<sub>j</sub></b><br />
There is at least one path from Tomya's house to Ciel's restaurant.
</p>
<h3>Sample Input</h3>
<pre>2
3 3
1 2 3
2 3 6
1 3 7
3 3
1 2 3
2 3 6
1 3 9</pre><h3>Sample Output</h3>
<pre>1
2</pre><h3>Explanations</h3>
<p>
In the first sample, only one shortest path exists, which is 1-3.
</p>
<p>
In the second sample, both paths 1-2-3 and 1-3 are the shortest paths.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/laycurse">laycurse</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-07-2012</td>
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