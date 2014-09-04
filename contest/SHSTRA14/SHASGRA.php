<?php require("../../includes/header.php"); ?><h1>Good Boy Eshwar</h1><div class="content">
<p>Eshwar is always amazed by the idea of start-ups. He tried very hard to set-up one but failed to get a concrete idea. So, he decided to partner with other start-ups. His close friend Bob has the idea of being a match-maker (yeah! it is a weird idea for a start-up, but it works in his society).<br />

</p>
<p>
Bob has recently got applications and requirements from several boys and girls. He spends a night figuring out who can be matched with whom but he couldn't continue his work due to the issues with his girl friend (yes, you read it correctly). Here Eshwar enters, he promises Bob that he will do anything for his friend though he never did anything ultimately. So, Bob gives him the simple task of finding number of different ways in which he can match the boys and girls. Bob gives all the necessary details (including the details on who can be matched with whom) to Eshwar and asks him to find the number of different ways, the matching can be done such that no one is left (Good that the number of girls and boys are equal in the list). Also Eshwar notices that Bob forgot to give the requirements of girls i.e., he only has the details about the preference of boys(Just whether they are compatible with a girl or not) but he doesn't have similar preference list given by girls.<br />

</p>
<p>
Eshwar felt that the task is nothing compared to his homework assignments. He went on counting the different ways with his fingers. But soon realized that he is nowhere close to completion. So, he seeks the help of Janardhan, who is proven to be good in finding resources online to solve any assignment or problems, no matter who the setter is. But this time, Janardhan is scared of plagiarism and gave him the hint that it can be solved by some algorithm. So, Eshwar seeks your help as he never had hands-on experience in coding (yes, he always outsourced his assignments!). Since Eshwar is scared of big numbers, output the number of different ways modulo 1000000003. (a modulo b is defined as the reminder when a divided by b). Note that two ways of matching is considered to be different if at-least one boy is matched to a different girl.
</p>
<h3>Input</h3>
<p>Input description.</p>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains two integers <b>N, M</b>. <b>N</b> denotes the number of boys (or girls) and <b>M</b> denotes the number connections between them as proposed by Bob. Then <b>M</b> lines follow. the ith line describes the ith connection. It contains two space separated integers u and v. u denotes the boy's index and v denotes the girl's index.That is, the id's of boys are 0..N-1 and that of girls are N...2N-1.</li>
</ul>
<p> </p>
<h3>Output</h3>
<p>Output description.</p>
<ul>
<li>For each test case, output a single line containing number of different ways to match modulo 1000000003.</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>15</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>18</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>N*N</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
2 2
1 2
0 3
3 7
0 3
2 3
1 5
0 4
0 5
2 5
1 4

<b>Output:</b>
1
3
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b><br />
It can be clearly seen that boy 1 prefers girl 2 and boy 0 prefers girl 3. So, number of ways to match is 1.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/karthikabinav">karthikabinav</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-01-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>8 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>