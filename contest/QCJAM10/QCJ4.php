<?php require("../../includes/header.php"); ?><h1>FIND HYPOTENUSE</h1><div class="content">

<p>Alice and Bob are returning home from their math class. The teacher was discussing Pythagoras' Theorem in class. All of a suddden Alice came up with an intriguing question. He asked Alice what would be the hypotenuse of least length of exactly N distinct right triangles. Alice who was not quite as sharp as Bob said, "I don't quite understand the question. What do you mean by N distinct triangles?" Bob explained, "Suppose N = 2 and you choose a certain hypotenuse. You should be able to construct exactly 2 distinct right triangles with that hypotenuse such that all sides(including hypotenuse) are integral. The answer you must give me is the smallest length the hypotenuse can have. In this case it turns out to be 25 and the sides are (7,24) (15,20)".</p>
<p>
Now As usual your task is to help Alice with the solution.</p>
<h3>Input</h3>
<p>First line will contain T, the number of test cases. Then T( T&lt;1000) lines follow on each line the number N (1&lt;=N&lt;=3000) will be given.</p>
<h3>Output</h3>
<p>Output must contain exactly T lines, the minimum length of the hypotenuse for each test case. Note: Output may not fit in a 64 bit integer</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
1
2


<b>Output:</b>
5
25

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abhijith">abhijith</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-01-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>