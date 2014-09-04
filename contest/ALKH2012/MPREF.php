<?php require("../../includes/header.php"); ?><h1>Merge Preferences</h1><div class="content">

<p>
Recommending systems are very popular now.Many commercial websites use it to recommend items to their users.Sometimes merging preferences is a difficult task because different users have different preferences.<br />
A user's preference is a linear order of items.<br />
For example there are 3 items, namely 1,2,3 and 3 users.<br />
The first user prefers item 1 to item 2 and prefers item 2 to item 3.<br />
So his/her preference is 1 2 3.<br />
The second user's preference is 2 1 3.<br />
And the third user's preference is 3 2 1.<br />
How can we merge the 3 preferences?<br />
If we merge them to get a preference P we can calculate the badness of it.<br />
It can be defined as the total number of <b>pairs that Disobey</b> in all the linear orders.</p>
<p>So the badness of 1 2 3 is 0 + 1 + 3 = 4 because  1 2 disobeys the second preference and all the 3 pairs  disobey the third preference.<br />
The badness of 1 3 2 is 1 + 2 + 2 = 5.<br />
The badness of 2 1 3 is 1 + 0 + 2 = 3.<br />
The badness of 2 3 1 is 2 + 1 + 1 = 4.<br />
The badness of 3 1 2 is 2 + 3 + 1 = 6.<br />
The badness of 3 2 1 is 3 + 2 + 0 = 5.<br />
<br />
So if we let P = 2 1 3 , the minimal badness is 3.</p>
<h3>Input</h3>
<p>
Given <b>N</b> users preferences of <b>M</b> items, calculate the minimal badness of merged preference.<br />
The first line of input is 2 integers, N  and M .<br />
Each of the next n lines is a permutation of integers from 1 to M.</p>
<h3>Output</h3>
<p>
Just output the minimal badness of merged preference in a single line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3 3
1 2 3
2 1 3
3 2 1

<b>Output:</b>
3
</pre><h3>Constraints</h3>
<pre>
 0 &lt; N &lt; 21 
 0 &lt; M &lt; 10001
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/bb_1">bb_1</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-09-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
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