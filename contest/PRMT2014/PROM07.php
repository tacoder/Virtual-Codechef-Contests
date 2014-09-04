<?php require("../../includes/header.php"); ?><h1>Royal Family Of Mysore</h1><div class="content">
<p> </p>
<p>A family tree of the Royal Family of Mysore has n vertices to represent each of its members. The present king, who is also the oldest member of the family, decides to find his heir. He decides that his next heir will be one of the youngest members of the family, i.e., the ones with no descendents. The king, though being just and wise, favours some of these younger members more than the others, the favour denoted by a favour number. Of course, the favour number of every other member of his family (the one with descendents) is zero, because, as the king says, they are all a bunch of schemers who are always fighting against each other. Now, each of the king’s sons, knowing that they will never be the king, wanted one of the member of their own subfamily to be the next king. So, all of the king’s sons, instead of fighting a huge battle against each other, decided to sit and figure out a fair solution to their problem. It was decided that each of the sons should have a fair chance of one of their bloodline being proclaimed as the next king. To achieve this, it was important that the sum of favour numbers in each subfamily, to be the same. So they all decided that to achieve this goal, they will make sure the favour number of some of the probable candidates drops to zero. It was decided that this should be achieved by dropping the least favour numbers. You, as the courtroom minister, have to find the least favour numbers to be dropped to give all the sons’ sub-families an equal chance. Note, that this can always be achieved by dropping the favour number of all candidates to zero.  </p>
<p> </p>
<h3>Input</h3>
<p>The first line contains integer n (2 ≤ n ≤ 10^5), denoting the number of member in the royal family. The next line contains n integers a1, a2, ..., an (0 ≤ ai ≤ 10^8), where ai is the favor number of the family member i. The favor number of every member with at least one descendant is guaranteed to be 0.<br />
Then follow n - 1 lines, describing the relationships.							 Each line contains a pair of integers xi, yi (1 ≤ xi, yi ≤ n, xi ≠ yi) — where xi is the nearest ancestor (father) of the descendant yi.<br />
The family members are numbered from 1 to n. Family member #1 is the king.
</p>
<h3>Output</h3>
<p>Print an integer t, the least favour numbers to be dropped to give all the sons’ sub-families an equal chance.</p>
<h3>Example</h3>
<pre><b>Input:</b>
6
0 0 12 13 5 6
1 2
1 3
1 4
2 5
2 6

<b>Output:</b>
6

<p>


<b>Note : This problem has been inspired from previously solved questions.</b> 
</p>
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/himanshuk123">himanshuk123</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-04-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>