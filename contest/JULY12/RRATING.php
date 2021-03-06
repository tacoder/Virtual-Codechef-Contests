<?php require("../../includes/header.php"); ?><h1>Restaurant Rating</h1><div class="content">

<p>Chef has opened up a new restaurant. Like every other restaurant, critics critique this place. The Chef wants to gather as much positive publicity as he can. Also, he is very aware of the fact that people generally do not tend to go through all the reviews. So he picks out the positive reviews and posts it on the website of the restaurant. A review is represented by an integer which is the overall rating of the restaurant as calculated by that particular review.<br />
A review is considered to be positive if it is among the top one-third of the total reviews when they are sorted by their rating. For example, suppose the ratings given by 8 different reviews are as follows:<br />
2 8 3 1 6 4 5 7<br />
Then the top one-third reviews will be 8 and 7. Note that we considered one-third to be 8/3=2 top reviews according to integer division. (see Notes)</p>
<p>So here is what the Chef wants from you: Given the reviews(ratings) by different critics, the Chef needs you to tell him what is the minimum rating that his website will be displaying. For example in the above case, the minimum rating that will be displayed is 7. Also, different critics keep reviewing the restaurant continuosly. So the new reviews keep coming in. The Chef wants your website ratings to be up-to-date. So you should keep updating the ratings there. At any point of time, the Chef might want to know the minimum rating being displayed. You'll have to answer that query. An interesting thing to note here is that a review might be in the website for some time and get knocked out later because of new better reviews and vice-versa.</p>
<p>Notes: To be precise, the number of reviews displayed website will be floor(n / 3), where n denotes the current number of all reviews.</p>
<h3>Input</h3>
<p>First line of the input file consists of a single integer N, the number of operations to follow. The next N lines contain one operation each on a single line. An operation can be of 2 types:<br />
1 x : Add a review with rating 'x' to the exisiting list of reviews (x is an integer)<br />
2 : Report the current minimum rating on the website </p>
<p><h3>Output</h3>
</p>
<p>For every test case, output a single integer each for every operation of type 2 mentioned above. If no review qualifies as a positive review, print "No reviews yet".</p>
<h3>Constraints</h3>
<pre>
1 ≤ N ≤ 250000
1 ≤ x ≤ 1000000000

</pre><h3>Example</h3>
<pre>
<b>Input:</b>
10
1 1
1 7
2
1 9
1 21
1 8
1 5
2
1 9
2


<b>Output:</b>
No reviews yet
9
9
</pre><p>
<br /><b>Explanation:</b><br />
Before the first query of the Chef, i.e. the first operation of type 2 in the input, the only ratings were 1 &amp; 7. Thus, there will be total of 2/3 = 0 positive ratings. For the next two, the ratings list now looks like: 1 5 7 8 9 21. Hence, top one-third will have 6/3 = 2 ratings as positive. And lowest displayed rating will be 9. Similarly for the last operation of type 2. Note that there are two ratings of the same value 9 now and only one of them can be in the top reviews. In such a case, you can choose any one of them.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vamsi_kavala">vamsi_kavala</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>31-05-2012</td>
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