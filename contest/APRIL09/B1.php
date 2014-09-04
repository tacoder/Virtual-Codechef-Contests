<?php require("../../includes/header.php"); ?><h1>Spaghetti Monsters</h1><div class="content">

<p><b>This problem was part of the <a href="http://www.codechef.com/APRIL09/">CodeChef April Challenge</a>.  All user submissions for this contest problem are publicly available <a href="http://www.codechef.com/APRIL09/status/B1/">here</a>.</b></p>
<p>Spaghetti Monsters have stolen The Chef&#8217;s golden spoon!  The Chef has a map, on which are marked: his location, the location of the golden spoon, and the locations of the spaghetti monsters. The map is in fact rectangular, consisting of square fields. Each field on the map, except for those adjacent to the boundary, is adjacent to 8 other fields -- fields which share a side or corner are assumed to be at a distance of 1 from each other, and it is possible to move between them directly. The Chef is a bit scared of spaghetti monsters and would prefer not to approach them too closely... Help him compute the minimum distance up to which he must approach some spaghetti monster, so as to find the golden spoon.</p>
<h3>Input</h3>
<p>The first line of input contains two numbers 1&lt;=n,m&lt;=1000, where n denotes the height of the map, and m its width.<br/><br />
The map is given in the next n lines, each of which consists of m characters: <br/><br />
The unique field represented by the character '@' is the location of The Chef. <br/><br />
The unique field represented by the character '$' is the location of the golden spoon.<br/><br />
A field represented by the character 'D' is the location of a spaghetti monsters. <br/><br />
All the remaining fields are represented by the character '.' and denote empty positions.</br/></br/></br/></br/></br/></p>
<h3>Output</h3>
<p>The output should contain exactly one number, equal to the minimum distance, at which The Chef must find himself from one of the spaghetti monsters in order to reach the golden spoon.</p>
<h3>Example 1</h3>
<pre>
<tt>
<b>Input:</b>
7 5
....$
.....
.....
D...D
.....
.....
@....

<b>Output:</b>
2
</tt>
</pre><h3>Example 2</h3>
<pre>
<tt>
<b>Input:</b>
7 5
....$
.....
.....
DDDDD
.....
.....
@....

<b>Output:</b>
0
</tt>
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-03-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>