<?php require("../../includes/header.php"); ?><h1>List Editing</h1><div class="content">
<p>At the ACME University, as part of the Graduate course work, each student is required to undergo project work. The authorities always make an effort to find a match among the students’ interests and the interests of the faculty members. First, they take a list of topics from the students' and a list of topics from the faculty. In order to avoid identifying students and faculties, all they preserve is simply, two consolidated lists of topics – one from the students and one from the faculties. No personal identification exists within these lists. The lists are sorted in ascending order of the indices of project topics in the repository. No topic appears twice in the same list.</p>
<p>To make the process simple, ACME University maintains a repository of 100 project topics - numbered from 1 to 100, inclusive. The students and faculty members must choose among those topics only. Their lists may have different number of topics; since more than one student (or faculty) may choose to work work on the same topic or some may like to work on multiple topics etc.</p>
<p>Once these two lists have been obtained, the university tries to make them identical. The student’s list is modified to match with the faculty’s list. The modification may be via</p>
<ul>
<li>inserting a new topic in the list</li>
<li>deleting a topic from the list</li>
<li>substituting a topic by another one</li>
</ul>
<p>The university wants to do this with minimal number of modifications to the list as each modification needs one full day to be communicated and accepted by the students. It is assumed that the students do not disagree to any such modification.</p>
<p>Write a program that accepts the lists from students and faculties and computes the minimum number of modifications that will require to be made to make the student's list identical to the faculty's list.</p>
<h3>Input</h3>
<p>The input contains several test cases. The first line of the input contains the number T, the number of test cases. The first line in each test case contains the number M, the number of topics in the students' list. The second line contains M integers A<sub>1</sub>, A<sub>2</sub> .., A<sub>M</sub> separated by single space characters. The third line in each test case contains the number N, the number of topics in the faculty's list. The fourth line contains N integers B<sub>1</sub>, B<sub>2</sub> .., B<sub>N</sub> separated by single space characters.</p>
<h3>Output</h3>
<p>Output T numbers, each on a line by itself, without any leading spaces or zeros. The number should be the minimum number of modifications that can be made to the students' list to make it identical to the faculty's list, for each respective test case.</p>
<h3>Constraints</h3>
<pre>1 ≤ T ≤ 100
1 ≤ M, N ≤ 100
1 ≤ A<sub>i</sub>, B<sub>i</sub> ≤ 100
The list { A<sub>1</sub> .. A<sub>M</sub> } has no duplicates.
The list { A<sub>1</sub> .. A<sub>M</sub> } is sorted in ascending order.
The list { B<sub>1</sub> .. B<sub>N</sub> } has no duplicates.
The list { B<sub>1</sub> .. B<sub>N</sub> } is sorted in ascending order.
</pre>
<h3>Sample Input</h3>
<pre>2
4
1 3 5 7
2
4 6
3
1 2 3
2
2 3

</pre>
<h3>Sample Output</h3>
<pre>4
1

</pre>
<h3>Explanation</h3>
<p>In the first test case 1, 3, 5 and 7 should be deleted from the list and 4 and 6 should be inserted. But this can take 6 modifications. Instead, we can delete either two of the 4 topics from the students' list and substitute the remaining two by 4 and 6 respectively. This takes 4 modifications. 4 modifications is optimal for this test case.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-10-2013</td>
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
            <td>C, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>