<?php require("../../includes/header.php"); ?><h1>Dwarf City of Moria</h1><div class="content">

<p>
Gandalf is fighting a Balrog in abandoned dwarf city of Moria.<br />
Unfortunately he doesn't have much time and want to end fight as soon as possible.<br />
As Gandalf is poor in maths you have to help him in forming the strategy.<br />
Balrog has power which is denoted by a number <b>X</b>. Gandalf has three types of weapon<br />
first one can reduce the power of Balrog to half, another weapon reduces Balrog's<br />
power to one third of the current power. The last weapon only reduces Balrog's power<br />
by decrementing it by one.<br />
To kill Balrog, Gandalf has to reduce his total power to zero by using minimum number of strike.
</p>
<h3>Input</h3>
<p>
The first line of input contains a integer <b>T</b> which denotes the number to test cases.<br />
After which <b>T</b> lines follows. Every line contains an integer <b>X</b> which denote the initial power of Balrog.
</p>
<h3>Output</h3>
<p>
For every test case output a integer in a new line which denotes the minimum number of strikes required to kill Balrog.
</p>
<h3>Input Constrain:</h3>
<pre>
1 &lt;= T &lt;= 20
2 &lt;= X &lt;= 1000000
</pre><h3>Example:</h3>
<pre>
<b>Input:</b>
2
10
19

<b>Output:</b>
4
5

</pre><p><b>Explanation:</b></p>
<p>
In 1st test case:<br/><br />
First use weapon which reduce power by 1. Then use weapon which reduce power to one third twice.<br />
Then again the weapon which reduce power by 1.<br/><br />
10-1=9<br/><br />
9/3=3<br/><br />
3/3=1<br/><br />
1-1=0<br />
</br/></br/></br/></br/></br/></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abhics1">abhics1</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-02-2013</td>
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