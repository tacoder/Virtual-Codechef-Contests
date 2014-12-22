<?php require("../../includes/header.php"); ?><h1>Counting Flags</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK47/mandarin2/FLAGS.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK47/russian/FLAGS.pdf">Russian</a> as well.</h3>
<p>
Mike is a famous traveler. He visits about 100 countries a year and buys the flag of each country he has been to.
</p>
<p>
Mike knows, that there are some flags, that correspond to one pattern, but colored in different ways. E.g. the flag of Ireland(<a href="http://en.wikipedia.org/wiki/File:Flag_of_Ireland.svg">link</a>) and the flag of Belgium(<a href="http://en.wikipedia.org/wiki/File:Flag_of_Belgium.svg">link</a>). In this problem we consider only <b>five</b> 2,2cm✕1,1cm patterns of flags:
</p>
<p>
<img src="http://i.imgur.com/Of9G66t.jpg" width="500" />
</p>
<p>
There are <b>N</b> different colors available to paint the flags and the colors are denoted by integers from 1 to <b>N</b>.<br />
Mike wants you to count the number of different well-painted flags. We call a flag well-painted if it's made according to the following algorithm:
</p>
<p><ul>
<li>Pick up one of the flag patterns considered above;
</li><li>Paint each one-colored polygon on the pattern in a color encoded by an integer from <b>1</b> to <b>N</b>. Different colors are encoded with different integers. If two different one-colored polygons share a common side(not corner), than they must be painted in different colors. In any other case they can be painted in both equal and different colors.
</li></ul>
</p>
<p>
Two flags are different, if they look different(have at least one pixel painted with different color).
</p>
<p>
Help Mike!
</p>
<h3>Input</h3>
<p>The first line of the input contains integer <b>T</b>, denoting the number of testcases. The description of <b>T</b> testcases follows.</p>
<p>The only line of each test case contains integer <b>N</b>, denoting the number of different colors, that can be used while painting a flag pattern.</p>
<p> </p>
<h3>Output</h3>
<p>For each testcase, output a single line containing an integer - the answer for the corresponding query.</p>
<p> </p>
<h3>Constraints</h3>
<p>1 ≤ <b>T</b> ≤ 10 000;</p>
<p>1 ≤ <b>N</b> ≤ 10 000 for each testcase.</p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
1
2
3

<b>Output:</b>
0
4
42
</pre><h3>Explanations:</h3>
<p>
There are <b>four</b> different well-painted flags for <b>N</b> = 2 different colors :
</p>
<p>
<img src="http://i.imgur.com/aWo1tTN.jpg" width="500" />
</p>
<h3>Text version of the pictures: </h3>
<p><b>Picture 1</b></p>
<p>
112233<br /><br />
112233<br /><br />
112233
</p>
<p>
111111<br /><br />
222222<br /><br />
333333
</p>
<p>
112222<br /><br />
112222<br /><br />
113333
</p>
<p>
122223<br /><br />
111333<br /><br />
144443
</p>
<p>
111222<br /><br />
333222<br /><br />
333444
</p>
<p><b>Picture 2</b></p>
<p>
112211<br /><br />
112211<br /><br />
112211
</p>
<p>
221122<br /><br />
221122<br /><br />
221122
</p>
<p>
111111<br /><br />
222222<br /><br />
111111
</p>
<p>
222222<br /><br />
111111<br /><br />
222222
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kostya_by">kostya_by</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rustinpiece">rustinpiece</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>31-05-2014</td>
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