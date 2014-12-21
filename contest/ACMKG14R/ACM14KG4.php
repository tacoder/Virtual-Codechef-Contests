<?php require("../../includes/header.php"); ?><h1>Jai Hanuman</h1><div class="content">
<p>Hanuman was the army chief in the war against ravana, he helped Ram. Well, everyone knew about that, but did you know that Hanuman also helped people of byteland? Let me tell you the story!!</p>
<p>Long long ago, on the day of diwali, people were unhappy with the crackers they had. They wanted to do some swaps with others and get the crackers they like, but they had lot of fights due to lack of rules. They all went to lord Hanuman for help, Hanuman asked them to follow few rules for peace. Firstly, Hanuman did the following,</p>
<p>
1) Hanuman, numbered all the people starting from <b>1</b>. There are <b>N</b> people in all.<br />
2) Lord also numbered the crackers in order starting from <b>1</b>. There are <b>N*5</b> crackers.<br />
3) He gave each of them 3 crackers to start with. Person numbered <b>i</b>, got crackers <b>(3*i)-2</b>, <b>(3*i)-1</b>, <b>3*i</b>.<br />
4) Hanuman kept rest of the crackers with him.
</p>
<p>
Following are the rules given,<br />
1) Each person gets his chance to ask for swap of crackers. This starts with person numbered <b>1</b>, then 2, 3, 4 ... and ends with person numbered <b>N</b>. Any person, in his turn, can request for <b>3</b> swaps at the most. Note that they can also request for swap for crackers that are with Hanuman.<br />
2) When a person asks for a swap, the other person should obey it and allow the swap.
</p>
<p>
Note that, after the process described above, each person will get <b>3</b> crackers.<br />
Having said that, Hanuman told the people to start the process.<br />
Let me also tell you about what the people prefer (In that order)<br />
1) They always want their crackers numbered in order. (Example : 1, 2, 3 or 12,11,10 but not 10, 11, 13)<br />
2) Each person has a preference number <b>P[i]</b>, they want their least-numbered cracker to be &gt;= <b>P[i]</b> and as least as possible.<br />
3) If he could not get set of crackers satisfying condition 1 and 2, he will then try to get his least-numbered cracker to be as least as possible (Leaving about &gt;= <b>P[i]</b> condition)<br />
<b>Note: </b> No person will ever break 1st condition. He will always try and get 3 ordered crackers. After that, they will try to follow 2nd condition, and if that is not possible then they move to the 3rd condition.
</p>
<p>
All <b>N</b> people are smart. They all make optimal choice. They all also know that others will always make optimal choice. Every person also knows about every other persons preference number (<b>P[ ]</b>).<br />
Your task is to write a program, given <b>N</b> and <b>P[ ]</b>, output the least-numbered cracker each person will end up with when everyone make optimal choice of swaps.
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. Each test case is as follows,<br />
First line of each test case has one integer, <b>N</b>. Second line of each test case contains <b>N</b> integers representing the array <b>P[ ]</b></p>
<h3>Output</h3>
<p>For each test case output one line with <b>N</b> integers, <b>i'th</b> integer being the least-numbered cracker received by <b>i'th</b> person</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>P[i]</b> ≤ <b>N*5</b></li>
<li><b>1</b> ≤ <b>Sum of N over all test cases</b> ≤ <b>500000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2
1 5
2
4 9

<b>Output:</b>
1 5
4 1
</pre><h3>Explanation</h3>
<p><b>Test case #1:</b><br />
First person does not make any swaps. He is happy with the crackers he has (1, 2, 3).<br />
Second person swaps cracker-4 with cracker-7 to get the crackers (5, 6, 7). This is to follow 2nd condition.
</p>
<p><b>Test case #2:</b><br />
First person makes 3 swaps (1&lt;-&gt;4, 2&lt;-&gt;5, 3&lt;-&gt;6). At this moment, first person has (4, 5, 6) and the second person has (1, 2, 3)<br />
In this case, second person preference number is 9. But there are only 10 crackers, so he cannot get (9, 10, 11), it is impossible to follow condition 1 and 2, for that reason he decided to follow 1st and 3rd condition. Which means he want to minimize his least-numbered cracker. Second person will <b>not</b> request for any swaps as he already has (1, 2, 3)
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-10-2014</td>
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
            <td>C, CPP 4.8.1, CPP11, JAVA</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>