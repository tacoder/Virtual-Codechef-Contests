<?php require("../../includes/header.php"); ?><h1>Walk on the Axis</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK51/mandarin/ANUWTA.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK51/russian/ANUWTA.pdf">Russian</a> as well.</h3>
<p>
There are <b>N+1</b> lights. Lights are placed at <b> (0, 0), (1, 0), (2, 0) ... (<b>N</b>, 0).</b> Initially all the lights are on. You want to turn off all of them one after one.  You want to follow a special pattern in turning off the lights.
</p>
<p>
You will start at <b>(0, 0)</b>. First, you walk to the right most light that is on, turn it off. Then you walk to the left most light that is on, turn it off. Then again to the right most light that is on and so on. You will stop after turning off all lights. You want to know how much distance you walked in the process. Note that distance between <b>(a,0)</b> and <b>(b,0)</b> is <b>|a-b|</b>.
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. Each test case has a single integer <b>N</b> on separate line.
</p>
<h3>Output</h3>
<p>For each test case, output the distance you walked.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10^5</b>
</li><li><b>1</b> ≤ <b>N</b> ≤ <b>10^5</b>
</li></ul>
<h3>Example</h3>
<pre><b>Input</b>
2
1
2

<b>Output</b>
2
5
</pre><h3>Explanation</h3>
<p><b>Testcase #2</b><br />
You are initially at (0, 0)<br />
Right most on-light is (2, 0). Distance = 2.<br />
Now you are at (2, 0).<br />
Left most on-light is (0, 0). Distance = 2.<br />
Now you are at (0, 0)<br />
Right most on-light is (1, 0). Distance = 1.<br />
Now you are at (1, 0) and all lights are turned off.<br />
Total distance walked = 5.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anudeep2011">anudeep2011</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/kostya_by">kostya_by</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-09-2014</td>
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