<?php require("../../includes/header.php"); ?><h1>Most Popular Friend</h1><div class="content">

<p>Anna Hazare is a well known social activist in India.</p>
<p>On 5th April, 2011 he started "Lokpal Bill movement".</p>
<p>Chef is very excited about this movement. He is thinking of contributing to it. He gathers his cook-herd and starts thinking about how our community can contribute to this.</p>
<p>All of them are excited about this too, but no one could come up with any idea. Cooks were slightly disappointed with this and went to consult their friends.</p>
<p>One of the geekiest friend gave them the idea of spreading knowledge through Facebook. But we do not want to spam people's wall. So our cook came up with the idea of dividing Facebook users into small friend groups and then identify the most popular friend in each group and post on his / her wall. They started dividing users into groups of friends and identifying the most popular amongst them.</p>
<p>The notoriety of a friend is defined as the averaged distance from all the other friends in his / her group. This measure considers the friend himself, and the trivial distance of '0' that he / she has with himself / herself.</p>
<p>The most popular friend in a group is the friend whose notoriety is least among all the friends in the group. </p>
<p>Distance between X and Y is defined as follows:<br />
Minimum number of profiles that X needs to visit for reaching Y's profile(Including Y's profile). X can open only those profiles which are in the friend list of the current opened profile. For Example:<br />
- Suppose A is friend of B.<br />
- B has two friends C and D.<br />
- E is a friend of D.</p>
<p>Now, the distance between A and B is 1, A and C is 2, C and E is 3. </p>
<p>So, one of our smart cooks took the responsibility of identifying the most popular friend in each group and others will go to persuade them for posting.  This cheeky fellow knows that he can release his burden by giving this task as a long contest problem.</p>
<p>Now, he is asking you to write a program to identify the most popular friend among all the friends in each group. Also, our smart cook wants to know the average distance of everyone from the most popular friend.</p>
<h3>Input</h3>
<p>
Friends in a group are labelled with numbers to hide their Facebook identity. The first line of input contains the number of groups in which users are divided. First line of each group contains the number of friends that belong to that group. i<sup>th</sup> line of each group contains the space separated friend list of 'i'. You are assured that each friend's profile can be accessed by the profile of every other friend by following some sequence of profile visits.</p>
<h3>Output</h3>
<p>Your output contains the most popular friend name label along with the average distance (space separated) from all other friends (including himself / herself) in six digits of precision. There might be multiple most popular friend, in that case output the friend labelled with least number.
</p>
<h3>Note:</h3>
<p>
Each person in a group have atleast one friend and he/she cannot be in his/her own friend list. <br />
Number of friends in a group cannot be more than 100.<br />
There are atmost 100 groups.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
6
3
5
1 4
3 5 6
2 4 6
4 5

<b>Output:</b>
4 1.166667
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ashwin_jain">ashwin_jain</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-06-2011</td>
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