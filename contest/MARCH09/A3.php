<?php require("../../includes/header.php"); ?><h1>The Guessing Game</h1><div class="content">
<p>Alice and Johnny are playing a simple guessing game. Johnny picks an arbitrary positive integer <i>n</i> (1&lt;=<i>n</i>&lt;=10<sup>9</sup>) and gives Alice exactly <i>k</i> hints about the value of <i>n</i>. It is Alice's task to guess <i>n</i>, based on the received hints. 
</p><p>
Alice often has a serious problem guessing the value of <i>n</i>, and she's beginning to suspect that Johnny occasionally cheats, that is, gives her incorrect hints. 
After the last game, they had the following little conversation:
<div align="justify">
<ul>
<li>[Alice] Johnny, you keep cheating!
</li><li>[Johnny] Indeed? You cannot prove it.
</li><li>[Alice] Oh yes I can. In fact, I can tell you with the utmost certainty that in the last game you lied to me at least *** times.
</li></ul>
</div>
</p><p>
So, how many times at least did Johnny lie to Alice? Try to determine this, knowing only the hints Johnny gave to Alice.

<h3>Input</h3>

</p><p>The first line of input contains <i>t</i>, the number of test cases (about 20). Exactly <i>t</i> test cases follow. 

</p><p>Each test case starts with a line containing a single integer <i>k</i>, denoting the number of hints given by Johnny (1&lt;=<i>k</i>&lt;=100000). Each of the next <i>k</i> lines contains exactly one hint. The <i>i</i>-th hint is of the form:</p>
<p>
 operator <i>l<sub>i</sub></i> logical_value
</p>
<p>where operator denotes one of the symbols &lt; , &gt; , or =; <i>l<sub>i</sub></i> is an integer (1&lt;=<i>l<sub>i</sub></i>&lt;=10<sup>9</sup>), while logical_value is one of the words: Yes or No. The hint is considered correct if logical_value is the correct reply to the question: "Does the relation: <i>n</i> operator <i>l<sub>i</sub></i> hold?", and is considered to be false (a lie) otherwise.

<h3>Output</h3>
</p><p>For each test case output a line containing a single integer, equal to the minimal possible number of Johnny's lies during the game.

<h3>Example</h3>

<pre>
<b>Input:</b>
3
2
&lt; 100 No
&gt; 100 No
3
&lt; 2 Yes
&gt; 4 Yes
= 3 No
6
&lt; 2 Yes
&gt; 1 Yes
= 1 Yes
= 1 Yes
&gt; 1 Yes
= 1 Yes

<b>Output:</b>
0
1
2
</pre>

</p><p><b>Explanation:</b> for the respective test cases, the number picked by Johnny could have been e.g. <i>n</i>=100, <i>n</i>=5, and <i>n</i>=1.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-12-2008</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>6 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>